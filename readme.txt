
                const { query, request, response, nextFunction, expectHttpCode } = test;
                const user = {
                    userId: userId,
                    usermetadata: {
                        companyId: companyId
                    }
                } as LgdUser;
                const findById = jest.fn().mockResolvedValue(user);
                const scope = {
                    domain: {
                        lgdUserRepo: {
                            getQuery: () => ({
                                findById: findById
                            }),
                            executeSingleQuery: jest.fn().mockResolvedValue(user),
                        } as any
                    } as any,
                } as any;
                const req = {
                    ...request,
                    user: user
                } as Request;
                const res = {
                    ...Response,
                    status: jest.fn().mockReturnValue({
                        send: jest.fn().mockReturnValue({
                            json: jest.fn().mockReturnValue({})
                        }),
                    }),
                } as any;
                const next = jest.fn().mockReturnValue({});
                const middleware = mutateCompanyId(scope, res, next);
                await middleware(req, res, next);
                expect(next).toHaveBeenCalled();
                expect(nextFunction).toHaveBeenCalled();
                expect(res.status).toHaveBeenCalledWith(expectHttpCode);
                expect(res.status().send).toHaveBeenCalledWith(response);
            
                if (response) {
                    expect(next).toHaveBeenCalledWith(response);
            
                } else {
                    expect(next).toHaveBeenCalled();
            
                }

<?php

/**
 * @OA\Get(
 *     path="/api/bill_pays",
 *     summary="List of Bill Pays",
 *     operationId="listBillPays",
 *     tags={"BillPays"},
 *     description="Returns list of bill pays",
 *     security={{"bearerAuth":{}}},
 *     @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(
 *                      property="about",
 *                      type="array",
 *                      @OA\Items(
 *                          @OA\Property(property="count_paid", type="integer"),
 *                          @OA\Property(property="total_paid", type="integer", format="float")
 *                      )          
 *                  ),
 *                  @OA\Property(
 *                      property="data",
 *                      type="array",
 *                      @OA\Items(
 *                          @OA\Property(property="id", type="integer"),
 *                          @OA\Property(property="name", type="string"),
 *                          @OA\Property(
 *                              property="date_due", 
 *                              type="array",
 *                              @OA\Items(
 *                                  @OA\Property(property="date", type="string", format="date-time"),
 *                                  @OA\Property(property="timezone_type", type="integer"),
 *                                  @OA\Property(property="timezone", type="string"),
 *                              ) 
 *                          ),
 *                          @OA\Property(property="value", type="float"),
 *                          @OA\Property(property="done", type="boolean"),
 *                          @OA\Property(property="user_id", type="integer"),
 *                          @OA\Property(
 *                              property="category_id", 
 *                              type="array",
 *                              @OA\Items(
 *                                  @OA\Property(property="id", type="integer"),
 *                                  @OA\Property(property="name", type="string"),
 *                                  @OA\Property(
 *                                      property="created_at", 
 *                                      type="array",
 *                                          @OA\Items(
 *                                              @OA\Property(property="date", type="string", format="date-time"),
 *                                              @OA\Property(property="timezone_type", type="integer"),
 *                                              @OA\Property(property="timezone", type="string"),
 *                                          ) 
 *                                  ),
  *                                  @OA\Property(
 *                                      property="updated_at", 
 *                                      type="array",
 *                                          @OA\Items(
 *                                              @OA\Property(property="date", type="string", format="date-time"),
 *                                              @OA\Property(property="timezone_type", type="integer"),
 *                                              @OA\Property(property="timezone", type="string"),
 *                                          ) 
 *                                  ),
 *                              ) 
 *                          ),
 *                          @OA\Property(
 *                                      property="created_at", 
 *                                      type="array",
 *                                          @OA\Items(
 *                                              @OA\Property(property="date", type="string", format="date-time"),
 *                                              @OA\Property(property="timezone_type", type="integer"),
 *                                              @OA\Property(property="timezone", type="string"),
 *                                          ) 
 *                                  ),
  *                                  @OA\Property(
 *                                      property="updated_at", 
 *                                      type="array",
 *                                          @OA\Items(
 *                                              @OA\Property(property="date", type="string", format="date-time"),
 *                                              @OA\Property(property="timezone_type", type="integer"),
 *                                              @OA\Property(property="timezone", type="string"),
 *                                          ) 
 *                                  ),
 *                          )          
 *                  ),
 *              )
 *          )
 *     )
 * )
 */

/**
 * @OA\Post(
 *      path="/api/bill_pay",
 *      summary="Create new Bill Pay",
 *      operationId="CreateBillPay",
 *      tags={"BillPays"},
 *      description="Create a new bill pay",
 *      security={{"bearerAuth":{}}},
 *      @OA\RequestBody(
 *          description="Data required",
 *          required=true,
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(property="name", type="string"),
 *                  @OA\Property(property="date_due", type="string", format="date"),
 *                  @OA\Property(property="value", type="float"),
 *                  @OA\Property(property="done", type="boolean"),
 *                  @OA\Property(property="category_id", type="integer"),
 *              )
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\Schema(
 *                  @OA\Property(
 *                      property="data",
 *                      type="array",
 *                      @OA\Items(
 *                          @OA\Property(property="id", type="integer"),
 *                          @OA\Property(property="name", type="string"),
 *                          @OA\Property(property="date_due", type="string", format="date-time"),
 *                          @OA\Property(property="value", type="float"),
 *                          @OA\Property(property="done", type="boolean"),
 *                          @OA\Property(property="category_id", type="integer"),
 *                          @OA\Property(property="date_due", type="string", format="date-time"),
 *                          @OA\Property(property="created_at", type="string", format="date-time"),
 *                          @OA\Property(property="updated_at", type="string", format="date-time"),
 *                      )
 *                  )
 *              )
 *       )
 *  )
 */

/**
 * @OA\Put(
 *      path="/api/bill_pays/{id}",
 *      summary="Updated a BillPay",
 *      operationId="UpdateBillPay",
 *      tags={"BillPays"},
 *      description="Updated a new billpay",
 *      security={{"bearerAuth":{}}},
 *      @OA\Parameter(
 *          name="id",
 *          in="path",
 *          description="ID of billpay",
 *          required=true,
 *          @OA\Schema(type="integer")
 *      ),
 *      @OA\RequestBody(
 *          description="Data required",
 *          required=true,
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(property="name", type="string"),
 *                  @OA\Property(property="date_due", type="string", format="date"),
 *                  @OA\Property(property="value", type="float"),
 *                  @OA\Property(property="done", type="boolean"),
 *                  @OA\Property(property="category_id", type="integer"),
 *              )
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\Schema(
 *                  @OA\Property(
 *                      property="data",
 *                      type="array",
 *                      @OA\Items(
 *                          @OA\Property(property="id", type="integer"),
 *                          @OA\Property(property="name", type="string"),
 *                          @OA\Property(property="date_due", type="string", format="date-time"),
 *                          @OA\Property(property="value", type="float"),
 *                          @OA\Property(property="done", type="boolean"),
 *                          @OA\Property(property="category_id", type="integer"),
 *                          @OA\Property(property="date_due", type="string", format="date-time"),
 *                          @OA\Property(property="created_at", type="string", format="date-time"),
 *                          @OA\Property(property="updated_at", type="string", format="date-time"),
 *                      )
 *                  )
 *              )
 *       )
 *  )
 */

 /**
 * @OA\Delete(
 *      path="/api/bill_pays/{id}",
 *      summary="Delete a Bill Pay",
 *      operationId="DeleteBillPay",
 *      tags={"BillPays"},
 *      description="Destroy a billPay",
 *      security={{"bearerAuth":{}}},
 *      @OA\Parameter(
 *          name="id",
 *          in="path",
 *          description="ID of BillPay",
 *          required=true,
 *          @OA\Schema(type="integer")
 *      ),
 *      @OA\Response(
 *          response=204,
 *          description="successful operation",
 *      )
 *

 *  )
 */

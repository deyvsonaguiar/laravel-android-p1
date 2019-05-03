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

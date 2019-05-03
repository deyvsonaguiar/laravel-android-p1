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
 *                  )
 *              ),
 *              @OA\Schema(
 *                  @OA\Property(
 *                      property="about",
 *                      type="array",
 *                      @OA\Items(
 *                          @OA\Property(property="count_paid", type="integer"),
 *                          @OA\Property(property="total_paid", type="integer", format="float")
 *                      )
 *                  )
 *              )
*           )
 *       )
 *    )
 * )
 */
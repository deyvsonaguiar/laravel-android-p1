<?php

/**
 * @OA\Get(
 *      path="/api/categories",
 *      summary="List of Categories",
 *      operationId="listCategories",
 *      tags={"Category"},
 *      description="Returns list of categories",
 *      security={{"bearerAuth":{}}},
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(
 *                      property="data",
 *                      type="array",
 *                      @OA\Items(
 *                          @OA\Property(property="id", type="integer"),
 *                          @OA\Property(property="name", type="string"),
 *                          @OA\Property(property="created_at", type="string", format="date-time"),
 *                          @OA\Property(property="updated_at", type="string", format="date-time"),
 *                      )
 *                  )
 *              )
 *          )
 *       )
 *  )
 */

/**
 * @OA\Post(
 *      path="/api/categories",
 *      summary="Create new Category",
 *      operationId="CreateCategory",
 *      tags={"Category"},
 *      description="Create a new category",
 *      security={{"bearerAuth":{}}},
 *      @OA\RequestBody(
 *          description="Data required",
 *          required=true,
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(property="name", type="string"),
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
 *      path="/api/categories/{id}",
 *      summary="Updated a Category",
 *      operationId="UpdateCategory",
 *      tags={"Category"},
 *      description="Updated a new category",
 *      security={{"bearerAuth":{}}},
 *      @OA\Parameter(
 *          name="id",
 *          in="path",
 *          description="ID of category",
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
 *      path="/api/categories/{id}",
 *      summary="Delete a Category",
 *      operationId="DeleteCategory",
 *      tags={"Category"},
 *      description="Destroy a category",
 *      security={{"bearerAuth":{}}},
 *      @OA\Parameter(
 *          name="id",
 *          in="path",
 *          description="ID of category",
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





<?php

/**
 * @OA\Post(
 *      path="/api/login",
 *      summary="Login to users",
 *      operationId="Login",
 *      tags={"Auth"},
 *      description="Returns new JWT Token",
 *      @OA\RequestBody(
 *          description="Data required",
 *          required=true,
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(property="email", type="string"),
 *                  @OA\Property(property="password", type="string")
 *              )
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(property="token", type="string")
 *              )
 *          )
 *       )
 *     )
 */

/**
 * @OA\Post(
 *      path="/api/logout",
 *      summary="Logout to users",
 *      operationId="Logout",
 *      tags={"Auth"},
 *      description="Invalidate to JWT Token",
 *      @OA\Response(
 *          response=204,
 *          description="successful operation"
 *       )
 *     )
 */

/**
 * @OA\Post(
 *      path="/api/refresh_token",
 *      summary="Refresh Token to user",
 *      operationId="Refresh",
 *      tags={"Auth"},
 *      description="Refresh JWT Token",
 *      @OA\Response(
 *          response=200,
 *          description="successful operation"
 *       )
 *     )
 */

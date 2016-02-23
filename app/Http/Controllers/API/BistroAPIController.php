<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBistroAPIRequest;
use App\Http\Requests\API\UpdateBistroAPIRequest;
use App\Models\Bistro;
use App\Repositories\BistroRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class BistroController
 * @package App\Http\Controllers\API
 */

class BistroAPIController extends AppBaseController
{
    /** @var  BistroRepository */
    private $bistroRepository;

    function __construct(BistroRepository $bistroRepo)
    {
        $this->bistroRepository = $bistroRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/bistros",
     *      summary="Get a listing of the Bistros.",
     *      tags={"Bistro"},
     *      description="Get all Bistros",
     *      produces={"application/json"},
     *      @SWG\Info(
     *         version="1.0.0",
     *         title="Technical Test Demo Solution",
     *         description="Api implementation",
     *         termsOfService="",
     *         @SWG\Contact(
     *             email="fred@fnkdesigns.co.uk"
     *         ),
     *         @SWG\License(
     *             name="Private License",
     *             url="http://www.fnkdesigns.co.uk"
     *         )
     *     ),
     *     @SWG\ExternalDocumentation(
     *         description="Some of my work can be found on this website",
     *         url="http://www.fnkdesigns.co.uk"
     *     ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Bistro")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->bistroRepository->pushCriteria(new RequestCriteria($request));
        $this->bistroRepository->pushCriteria(new LimitOffsetCriteria($request));
        $bistros = $this->bistroRepository->all();

        return $this->sendResponse($bistros->toArray(), "Bistros retrieved successfully");
    }

    /**
     * @param CreateBistroAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/bistros",
     *      summary="Store a newly created Bistro in storage",
     *      tags={"Bistro"},
     *      description="Store Bistro",
     *      produces={"application/json"},
     *      @SWG\Info(
     *         version="1.0.0",
     *         title="Technical Test Demo Solution",
     *         description="Api implementation",
     *         termsOfService="",
     *         @SWG\Contact(
     *             email="fred@fnkdesigns.co.uk"
     *         ),
     *         @SWG\License(
     *             name="Private License",
     *             url="http://www.fnkdesigns.co.uk"
     *         )
     *     ),
     *     @SWG\ExternalDocumentation(
     *         description="Some of my work can be found on this website",
     *         url="http://www.fnkdesigns.co.uk"
     *     ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Bistro that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Bistro")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Bistro"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateBistroAPIRequest $request)
    {
        $input = $request->all();

        $bistros = $this->bistroRepository->create($input);

        return $this->sendResponse($bistros->toArray(), "Bistro saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/bistros/{id}",
     *      summary="Display the specified Bistro",
     *      tags={"Bistro"},
     *      description="Get Bistro",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Bistro",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Info(
     *         version="1.0.0",
     *         title="Technical Test Demo Solution",
     *         description="Api implementation",
     *         termsOfService="",
     *         @SWG\Contact(
     *             email="fred@fnkdesigns.co.uk"
     *         ),
     *         @SWG\License(
     *             name="Private License",
     *             url="http://www.fnkdesigns.co.uk"
     *         )
     *     ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Bistro"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Bistro $bistro */
        $bistro = $this->bistroRepository->find($id);

        if(empty($bistro)) {
            return Response::json(ResponseUtil::makeError("Bistro not found"), 400);
        }

        return $this->sendResponse($bistro->toArray(), "Bistro retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateBistroAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/bistros/{id}",
     *      summary="Update the specified Bistro in storage",
     *      tags={"Bistro"},
     *      description="Update Bistro",
     *      produces={"application/json"},
     *       @SWG\Info(
     *         version="1.0.0",
     *         title="Technical Test Demo Solution",
     *         description="Api implementation",
     *         termsOfService="",
     *         @SWG\Contact(
     *             email="fred@fnkdesigns.co.uk"
     *         ),
     *         @SWG\License(
     *             name="Private License",
     *             url="http://www.fnkdesigns.co.uk"
     *         )
     *     ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Bistro",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Bistro that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Bistro")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Bistro"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateBistroAPIRequest $request)
    {
        $input = $request->all();

        /** @var Bistro $bistro */
        $bistro = $this->bistroRepository->find($id);

        if (empty($bistro)) {
            return Response::json(ResponseUtil::makeError("Bistro not found"), 400);
        }

        $bistro = $this->bistroRepository->update($input, $id);

        return $this->sendResponse($bistro->toArray(), "Bistro updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/bistros/{id}",
     *      summary="Remove the specified Bistro from storage",
     *      tags={"Bistro"},
     *      description="Delete Bistro",
     *      produces={"application/json"},
     *       @SWG\Info(
     *         version="1.0.0",
     *         title="Technical Test Demo Solution",
     *         description="Api implementation",
     *         termsOfService="",
     *         @SWG\Contact(
     *             email="fred@fnkdesigns.co.uk"
     *         ),
     *         @SWG\License(
     *             name="Private License",
     *             url="http://www.fnkdesigns.co.uk"
     *         )
     *     ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Bistro",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Bistro $bistro */
        $bistro = $this->bistroRepository->find($id);

        if(empty($bistro)) {
            return Response::json(ResponseUtil::makeError("Bistro not found"), 400);
        }

        $bistro->delete();

        return $this->sendResponse($id, "Bistro deleted successfully");
    }
}

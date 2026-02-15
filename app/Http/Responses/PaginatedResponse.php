<?php
namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\AbstractPaginator;
use Symfony\Component\HttpFoundation\Response;

final class PaginatedResponse implements Responsable{

   public function __construct(
    private AbstractPaginator $paginator,
    private int $status=Response::HTTP_OK){
   }

   public function toResponse($request){
       $data = $this->paginator->toArray();

       return new JsonResponse(data:[
         'items' => $data['data'],
         'meta' =>[
            'current_page'=>$data['current_page'],
            'per_page'=>$data['per_page'],
            'total'=>$data['total']?? null,
            'last_page'=>$data['last_page']?? null,
            'from'=>$data['from'],
            'to'=>$data['to']
         ]
       ],
         status:$this->status);
   }
}

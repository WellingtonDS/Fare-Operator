<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Models\Operator;
use App\Http\Requests\OperatorRequest;
use App\Http\Controllers\Controller;

class OperatorController extends Controller
{
	/**
	 * @var Operator
	 */
	private $operator;

	public function __construct(Operator $operator)
	{
		$this->operator = $operator;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$operator = $this->operator->paginate('10');

		return response()->json($operator, 200);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(OperatorRequest $request)
	{
		$data = $request->all();

		try{

			$operator = $this->operator->create($data);

			return response()->json([
				'data' => [
					'msg' => 'Categoria cadastrada com sucesso!'
				]
			], 200);

		} catch (\Exception $e) {
			$message = new ApiMessages($e->getMessage());
			return response()->json($message->getMessage(), 401);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		try{

			$operator = $this->operator->findOrFail($id);

			return response()->json([
				'data' => $operator
			], 200);

		} catch (\Exception $e) {
			$message = new ApiMessages($e->getMessage());
			return response()->json($message->getMessage(), 401);
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(OperatorRequest $request, $id)
	{
		$data = $request->all();

		try{

			$operator = $this->operator->findOrFail($id);
			$operator->update($data);

			return response()->json([
				'data' => [
					'msg' => 'Categoria atualizada com sucesso!'
				]
			], 200);

		} catch (\Exception $e) {
			$message = new ApiMessages($e->getMessage());
			return response()->json($message->getMessage(), 401);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		try{

			$operator = $this->operator->findOrFail($id);
			$operator->delete();

			return response()->json([
				'data' => [
					'msg' => 'Categoria removida com sucesso!'
				]
			], 200);

		} catch (\Exception $e) {
			$message = new ApiMessages($e->getMessage());
			return response()->json($message->getMessage(), 401);
		}
	}
}
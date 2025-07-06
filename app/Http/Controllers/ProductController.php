<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Modules\TableEdit\Tables\Loan;
use App\Modules\TableEdit\Tables\ProductTableEdit;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Product::class);

        return ProductResource::collection(Product::all());
    }

    public function store(ProductRequest $request)
    {
        $this->authorize('create', Product::class);

        return new ProductResource(Product::create($request->validated()));
    }

    public function show(Product $product)
    {
        $this->authorize('view', $product);

        return new ProductResource($product);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $this->authorize('update', $product);

        $product->update($request->validated());

        return new ProductResource($product);
    }

    public function destroy(Product $product)
    {
        $this->authorize('delete', $product);

        $product->delete();

        return response()->json();
    }

    public function tableShow()
    {
        $tableEdit = new ProductTableEdit();
        $data = $tableEdit->render();
        return response()->json($data);
    }

    public function tableEdit(Request $request)
    {
        $row = $request->get('row');
        $data = $request->get('data');

        $tableEdit = new ProductTableEdit();
        $res = $tableEdit->edit($row, $data);

        return response()->json([
            'status' => 'success',
            'message' => $res,
        ]);
    }
}

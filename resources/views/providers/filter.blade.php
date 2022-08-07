<div class="table-responsive">
  <table class="table align-middle table-striped">
    <tbody>
      
      @foreach($products as $product)
        <tr>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox">
            </div>
          </td>
          <td class="productlist">
            <a class="d-flex align-items-center gap-2" href="#">
              <div class="product-box">
                  <img src="https://via.placeholder.com/400X300" alt="">
              </div>
              <div>
                  <h6 class="mb-0 product-title">{{ $product->name }}</h6>
              </div>
              </a>
          </td>
          <td><span>${{ $product->price }}</span></td>
          <td><span class="badge rounded-pill alert-success">Active</span></td>
          <td><span>5-31-2020</span></td>
          <td>
            <div class="d-flex align-items-center gap-3 fs-6">
              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
            </div>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>
</div>
{{ $products->links() }}

@extends('layouts/'.$template)


@section('content')
  <!--start content-->
       <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">eCommerce</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Products List</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Settings</button>
                  <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">  <a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>  <a class="dropdown-item" href="javascript:;">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <!--end breadcrumb-->

              <div class="card">
                <div class="card-header py-3">
                  <div class="row align-items-center m-0">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option value="0" selected="selected">All category</option>
                            @foreach($categories as $category)
                              <option value="{{ $category->id }}" class="category">{{ $category->name }}</option>
                            @endforeach
                            <!-- <option>Fashion</option>
                            <option>Electronics</option>
                            <option>Furniture</option>
                            <option>Sports</option> -->
                        </select>
                    </div>
                    <div class="col-md-2 col-6">
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-2 col-6">
                        <select class="form-select">
                            <option>Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
                            <option>Show all</option>
                        </select>
                    </div>
                 </div>
                </div>
                <div class="card-body">

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
            <!-- <nav class="float-end mt-4" aria-label="Page navigation">
              <ul class="pagination">

                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav> -->

  </div>
</div>

 </main>  
  <!--end page main-->
  <script>
    let categories = document.querySelector('.form-select');
    console.log(categories.value);
    categories.addEventListener('change', ()=>{
      console.log(categories.value);
      let request = new XMLHttpRequest();
        request.open('Get', `http://127.0.0.1:8000/admin/products-category?id=${categories.value}`);
        //request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        console.log(request);
         request.addEventListener('load', ()=>{
            if(request.status == 200 && request.response != 'error'){
                console.log(request.response);
                //console.log(obj); 
            }
            else{
                console.log("error");
                document.querySelector(".card-body").innerHTML += "<p>Пустая категория</p>";
            }
        });

        request.send();
    })
    
  </script>
@endsection
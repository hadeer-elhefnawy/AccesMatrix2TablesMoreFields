<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Web Branch</title>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
   
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
</head>

<body>

    <!-- START OF HEADER SECTION -->
    <section id="header pt-5 mt-5">
        <div class="container pt-5">
            <div class="row px-5">
                <div class="col-md-6 text-center mb-3">
                    <h1 class="text-start py-3">Product Access Allowed </h1>
                </div>
                <div class="col-md-6 text-center mb-3">
                    <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Product Access</a>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="RoleId" class="form-label">Role ID</label>
                    <input type="text" class="form-control" id="RoleId" placeholder="Role ID">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ProductAllowed" class="form-label">Product Allowed</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">Allowed</option>
                        <option value="2">Disallowed</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ProductCode" class="form-label">Product Code</label>
                    <input type="text" class="form-control" id="ProductCode" placeholder="Product Code">
                </div>
                <div class="col-12 mb-3">
                    <label for="ProdDescription" class="form-label">Product Description</label>
                    <textarea class="form-control" id="ProdDescription" rows="3"></textarea>
                </div>

                <div class="col-12 text-center my-4">
                    <a href="{{url('/ProductPostingAllowed')}}" class="btn btn-info mx-3 text-white"><i class="fas fa-backward"></i>   Back</a>
                    <a href="{{url('/GroupRestriction')}}" class="btn btn-primary mx-3">Next   <i class="fas fa-forward"></i></a>
                 </div>
             </div>
         </div>
     </section>
     <!-- END OF HEADER SECTION -->
 
   
 
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
 
 
 </body>
 
 </html>    
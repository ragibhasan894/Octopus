@extends('layouts.frontend')

@section('content')
    <div class="container col-sm-8 text-center m-5">
        <form id="create-product-form" class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Product Name</label>
                    <input type="text" class="form-control product-name" name="name[]" placeholder="Name" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Quantity</label>
                    <input type="text" class="form-control product-quantity" name="quantity[]" placeholder="Quantity" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Price</label>
                    <div class="input-group">
                        <input type="text" class="form-control product-price" name="price[]" placeholder="Price" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
            </div>
            <button id="add-more" class="btn btn-default add-more" type="button">Add more product</button>
            <button class="btn btn-success" type="submit">Submit form</button>
        </form>
    </div>


    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            document.getElementById('add-more').addEventListener('click', function () {
                // formElement = document.getElementById('create-product-form').innerHTML;
                const formElement = document.createElement('div');

                formElement.className = 'form-row';
                formElement.innerHTML =      '<div class="col-md-4 mb-3">'+
                                        '<label for="validationCustom01">Product Name</label>'+
                                        '<input type="text" class="form-control product-name" name="name[]" placeholder="Name" value="" required>'+
                                    '</div>'+
                                    '<div class="col-md-4 mb-3">'+
                                        '<label for="validationCustom02">Quantity</label>'+
                                        '<input type="text" class="form-control product-quantity" name="quantity[]" placeholder="Quantity" value="" required>'+
                                    '</div>'+
                                    '<div class="col-md-4 mb-3">'+
                                        '<label for="validationCustomUsername">Price</label>'+
                                        '<div class="input-group">'+
                                            '<input type="text" class="form-control product-price" name="price[]" placeholder="Price" required>'+
                                        '</div>'+
                                    '</div>'
                document.getElementById('create-product-form').append(formElement);
            });
        })();
    </script>
@endsection

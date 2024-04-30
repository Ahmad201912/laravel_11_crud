<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel 11 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-success py-3">
        <h3 class="text-white text-center">Simple Laravel 11 CRUD</h3>
    </div>

    <div class="container">

        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
            </div>

        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-success">

                        <h3 class="text-white">Create Products</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{ route('products.store') }}" method="post">
                        @csrf
                        <div class="card-body">

                                {{-- The name field code is here --}}
                            <div class="mb-3">
                                <label for="name" class="form-label h5">Name</label>
                                <input value="{{ old('name') }}" type="text" id="name"
                                    class="@error('name') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Name" name="name">
                                <!-- The 'id' attribute should match the 'for' attribute in the label -->

                                @error('name')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="sku" class="form-label h5">Sku</label>
                                <input value="{{ old('sku') }}" type="text" id="sku"
                                    class="@error('sku') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Sku" name="sku">
                                <!-- The 'id' attribute should match the 'for' attribute in the label -->

                                @error('sku')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="price" class="form-label h5">Price</label>
                                <input value="{{ old('price') }}" type="text" id="price"
                                    class="@error('price') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Price" name="price">
                                <!-- The 'id' attribute should match the 'for' attribute in the label -->

                                @error('price')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="" class="form-label h5">Description</label>
                                <textarea placeholder="Description" class="form-control" name="description" cols="30" rows="5">{{ old('price') }}</textarea>

                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label h5">Image</label>
                                <input type="file" class="form-control form-control-lg" placeholder="price"
                                    name="image">

                            </div>

                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

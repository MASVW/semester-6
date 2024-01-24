<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>{{$title}}</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <style>
      .container{
         margin-top: 5rem;
      }
   </style>
</head>
<body>
@if($title == 'Filling Form')

<div class="container">
   <h1>Filling Form</h1>
   <div class="d-flex justify-content-center">
      <div class="col-lg-6 my-5">
         <div class="col-lg-12">
            <form action="{{route('filling.form')}}" method="post">
               @csrf
               <div class="mt-2">
                  <label class="form-label" for="nama">Name</label>
                  <input id="nama" class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Enter the item name">
                  @error('name')
                  <div class="invalid-feedback">
                     {{$message}}
                  </div>
                  @enderror
               </div>
               <div class="mt-2">
                  <label for="harga">Harga</label>
                  <input id="harga" class="form-control @error('price') is-invalid @enderror" type="number" name="price" placeholder="Enter the item price">
                  @error('price')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                  @enderror              
               </div>
               <div class="mt-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

@else

<div class="container">
   <h1>Edit Item {{$barang->nama}}</h1>
   <div class="d-flex justify-content-center">
      <div class="col-lg-6 my-5">
         <div class="col-lg-12">
            <form action="/barang/{{$barang->id}}" method="post">
               @method('put')
               @csrf
               <div class="mt-2">
                  <label for="">Nama</label>
                  <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Enter the item name" value="{{$barang->nama}}">
                  @error('name')
                  <div class="invalid-feedback">
                     {{$message}}
                  </div>
                  @enderror
               </div>
               <div class="mt-2">
                  <label for="">Harga</label>
                  <input class="form-control @error('price') is-invalid @enderror" type="number" name="price" placeholder="enter the item price" value="{{$barang->harga}}">
                  @error('price')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                  @enderror 
               </div>
               <div class="mt-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endif
</body>
</html>
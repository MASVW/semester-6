<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <style>
      .container{
         margin-top: 5rem;
      }
      table{
         margin-top: 1.5rem;
         font-size: 1.2rem;
         width: 100%;
      }
      .first{
         width: 10%;
      }
   </style>
</head>
<body>
   <div class="container">
      <h1>Detail about items {{$barang->nama}}</h1>
      <div class="d-flex justify-content-center">
         <div class="col-lg-8">
            <table class="table">
               <tbody>
                  <tr>
                     <td class="first">
                        Name
                     </td>
                     <td>
                        :
                     </td>
                     <td>
                        {{$barang->nama}}
                     </td>
                  </tr>
                  <tr>
                     <td class="first">
                        Price
                     </td>
                     <td>
                        :
                     </td>
                     <td>
                        {{$barang->harga}}
                     </td>
                  </tr>
               </tbody>
            </table>
            <div class="col-lg-12">
               <div class="row">
                  <div class="col-lg-4">
                     <a href="{{route('home')}}">
                        <div class="d-grid gap-2">
                           <button class="btn btn-primary">Back Home</button>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-4">
                     <a href="/barang/{{$barang->id}}/edit">
                        <div class="d-grid gap-2">
                           <button class="btn btn-secondary">Edit</button>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-4">
                     <form action="/barang/{{$barang->id}}/delete" method="post">
                        @method('delete')
                        @csrf
                        <div class="d-grid gap-2">
                           <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html>
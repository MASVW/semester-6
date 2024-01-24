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
      table, th, td {
         border: 1px solid black;
         border-collapse: collapse;
      }
   </style>
</head>
<body>
   
<div class="container">
   <h1>Welcome</h1>
   <div class="col-lg-12 my-2">
      <div class="row">
         <div class="col-lg-9">
            <h5>Here are the list of items</h5>
         </div>
         <div class="col-lg-3">
            <a href="{{route('filling.form')}}">
               <div class="d-grid gap-2">
                  <button class="btn btn-primary">Add Item</button>
               </div>
            </a>
         </div>
      </div>
   </div>
      <div class="container-fluid">
         <div col-lg-12>
            <table style="width: 100%;">
               <thead style="text-align: center;">
                  <tr>
                     <td rowspan="2">
                        No
                     </td>
                     <td rowspan="2">
                        Item
                     </td>
                     <td rowspan="2">
                        Harga
                     </td>
                     <td colspan="3">
                        Action
                     </td>
                  </tr>
                  <tr>
                     <td>
                        View
                     </td>
                     <td>
                        Update
                     </td>
                     <td>
                        Delete
                     </td>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1?>
                  @foreach($barang as $item)
                  <tr>
                     <td>
                        {{$i}}
                     </td>
                     <td>
                        {{$item->nama}}
                     </td>
                     <td>
                        {{$item->harga}}
                     </td>
                     <td>
                        <a href="/barang/{{$item->id}}">
                           <div class="px-2 py-2 d-grid -gap-2">
                              <button class="btn btn-primary">View</button>
                           </div>
                        </a>
                     </td>
                     <td>
                        <a href="/barang/{{$item->id}}/edit">
                           <div class="px-2 py-2 d-grid -gap-2">
                              <button class="btn btn-secondary">Update</button>
                           </div>
                        </a>
                     </td>
                     <td>
                        <form action="/barang/{{$item->id}}/delete" method="post">
                           @method('delete')
                           @csrf
                           <div class="px-2 py-2 d-grid -gap-2">
                              <button class="btn btn-danger">Delete</button>
                           </div>
                        </form>
                     </td>
                  </tr>
                  <?php $i++?>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
</div>

</body>
</html>
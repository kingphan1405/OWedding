<!DOCTYPE html>
<html lang="en">
  <head>
   

    <style type="text/css">
        .title_deg
        {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 40px;
        }

        .table_deg
        {
            border: 2px solid white ;
            width: 100%;
            margin: auto;
            text-align: center;

        }

        .th_deg
        {
            background-color: skyblue;
        }
        .img_size
        {
            width: 200px;
            height: 100px;
        }
        .th
        {
            padding: 10px;
        }

    </style>
  </head>
  <body>
    <div class="container-scroller">
     
        <div class="main-panel">
            <div class="content-wrapper">

                <h1 class="title_deg">All Orders</h1>

                <div style="padding-left: 400px; padding-bottom: 30px; color:black">
                    <form action="{{url('search')}}" method="get">
                        @csrf
                        <input type="text" name="search" placeholder="Search For Somethings">   
                        <input type="submit" value="Search" class="btn btn-outline-primary">                               

                    </form>
                </div>

                <table class="table_deg">
                    <tr class="th_deg">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Image</th>
                        <th>Delivered</th>
                        <th>Print PDF</th>
                        <th>Send Email</th>
                    </tr>

                    @forelse($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->product_title}}</td>
                        <td>{{$user->quantity}}</td>
                        <td>{{$user->price}}</td>
                        <td>{{$user->payment_status}}</td>
                        <td>{{$user->delivery_status}}</td>
                        <td>
                            <img src="/product/{{$user->image}}" class="img_size">
                        </td>
                        <td>
                            @if($user->delivery_status=='processing')
                            <a href="{{url('delivered',$user->id)}}" onclick="return confirm('Are you sure this product is delivered')" class="btn btn-primary">Delivered</a>
                            @else
                            <p style="color: green;">Delivered</p>

                            @endif
                        </td>
                        <td>
                            <a href="{{url('print_pdf',$user->id)}}" class="btn btn-secondary">Print PDF</a>
                        </td>
                        <td>
                            <a href="{{url('send_email',$user->id)}}" class="btn btn-info">Send Email</a>
                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="16">
                            No Data Found
                        </td>
                    </tr>
                    @endforelse
                </table>

            </div>
        </div>


  </body>
</html>
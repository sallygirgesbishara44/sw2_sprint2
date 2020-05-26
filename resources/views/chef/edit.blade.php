@extends('layouts.nav')
<head>
  

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/maiin.css')}}">
</head>
@section('content')

<div class="main">

    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="contain">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form" action="{{ route('chef.update', ['chef'=> $order->id]) }}">
                    {{-- <form method="POST" id="signup-form" class="signup-form" action="{{ route('profile.update', ['profile'=> 1]) }}"> --}}
                @csrf
               @method('PUT')

                {{-- <h2 class="form-title">Update Order</h2> --}}
                    <div class="form-group">
                        {{-- <input type="text" class="form-input" name="order" id="order" placeholder="order" value="{{ old( 'Name' , $order->order) }}"/> --}}
                    
                        <?php 
                    echo '<h3>';
                        echo 'Update Order: ';
                    print_r(  $order->id );
                    echo '</h3>';
                    $str_arr = explode ("{", $order->order);
    
                     for ($x = 2; $x < count($str_arr); $x++)
                     {
                         $item = substr($str_arr[$x] , 0 ,stripos($str_arr[$x],",\"price\""));
                         $item = str_replace("\"name\":","",$item);
                         $item = str_replace("\"quantity\":","",$item);
                         $item_array = explode (",", $item);
                         $item_name     = $item_array[0];
                         $item_name = str_replace("\"","",$item_name); 
                         $item_Quantity = $item_array[1];
                         $item_string =  $item_name . "-" . $item_Quantity;
                         echo '<li>';
                         print_r(  $item_string );
                         echo '</li>';
                        //  echo '<br/>';
                        // print_r( substr($str_arr[$x] , 1 ,6));
                        // print_r( $str_arr[$x]);
                     } 
                      ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    </div>
                    {{-- <div class="form-group">
                        <input type="text" class="form-input" name="lastname" id="lname" placeholder="Last Name" value="{{ old( 'Name' , $profile->last_name) }}"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="adress" id="address" placeholder="Adress" value="{{ old( 'Name' , $profile->address) }}"/>
                    </div> --}}

                   
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Order Ready"/>
                    </div>
                </form>
                
            </div>
        </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    @endsection
    
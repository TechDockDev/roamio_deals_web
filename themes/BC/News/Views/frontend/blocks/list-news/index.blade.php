<style>
    .image{
        background: url("images/img.png");
         height:400px;
         border-radius:10px;
    }
    .image1{
        background: url("images/img_1.png");
         height:400px;
         border-radius:10px;   
    }
</style>


<div class="bravo-list-news">
    <div class="container">
        @if($title)
            <div class="title">
                {{$title}}
                @if(!empty($desc))
                    <div class="sub-title">
                        {{$desc}}
                    </div>
                @endif
            </div>
        @endif
        <div class="list-item">
            <div class="row">
                @foreach($rows as $row)
                    <div class="col-lg-4 col-md-6">
                        @include('News::frontend.blocks.list-news.loop')
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="bravo-list-news">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
              <div class="card1">
                <div class="destination-item">
                    <div class="image">
                    <div class="effect"></div>
                     <div class="content">
                        <h4 class="title">Dubai</h4>
                          <div class="desc">                                                                                                                                                                                                                                             
                         <a href="http://127.0.0.1:8000/hotel?location_id=11" target="_blank"> 
                        2 Hotels
                         </a> 
                        </div>
                      </div>
                </div>
            </div>
              </div>
        </div>
        <div class="col-md-6">
            <div class="card1"> 
                <div class="destination-item">
                    <div class="image1">
                    <div class="effect"></div>
                     <div class="content">
                        <h4 class="title">Dubai</h4>
                          <div class="desc">                                                                                                                                                                                                                                             
                         <a href="http://127.0.0.1:8000/hotel?location_id=11" target="_blank"> 
                        2 Hotels
                         </a>                                                                                                                                                                                                 </div>
                      </div>
                </div>
            </div>
              </div>
        </div>
    </div>

    </div>
</div>




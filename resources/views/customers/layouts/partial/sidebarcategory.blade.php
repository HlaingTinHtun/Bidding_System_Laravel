<div class="col-md-3 col-sm-4 col-xs-12 sidebar">
    <div class="sidebar-shop sidebar-left">
        <div class="widget widget-filter">
            <div class="category-filter">
                <h2 class="widget-title">ALL CATEGORY LISTING</h2>
                <ul>
                    @foreach($allcat as $cats)
                        <li style="text-decoration: underline;margin-bottom: 5px;"><a href="category/{{$cats->slug}}">{{$cats->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- End Category -->
            <!-- price filter may be phase2 -->
            <!-- <div class="box-filter price-filter">
                <h2 class="widget-title">price</h2>
                <div class="inner-price-filter">
                    <ul>
                        <li><a href="itemcategory">$ Under-10 (29)</a></li>
                        <li><a href="itemcategory">$ 10-20 (29)</a></li>
                        <li><a href="itemcategory">$ 20-40 (29)</a></li>
                        <li><a href="itemcategory">$ 40-50 (29)</a></li>
                        <li><a href="itemcategory">$ 50-80 (29)</a></li>
                    </ul>
                    <div class="range-filter">
                        <label>$</label>
                        <div id="amount"></div>
                        <button class="btn-filter">Filter</button>
                        <div id="slider-range"></div>
                    </div>
                </div>
            </div> -->
            <!-- End Price -->
            <!-- color filter -->
            <!-- <div class="box-filter color-filter">
                <h2 class="widget-title">Color</h2>
                <div class="list-color-filter">
                    <a href="itemcategory" style="background-color:#ffffff"></a>
                    <a href="itemcategory" style="background-color:#e66054"></a>
                    <a href="itemcategory" style="background-color:#d0b7cc"></a>
                    <a href="itemcategory" style="background-color:#107a8e"></a>
                    <a href="itemcategory" style="background-color:#b9cad2"></a>
                    <a href="itemcategory" style="background-color:#a7bc93"></a>
                    <a href="itemcategory" style="background-color:#d3b627"></a>
                    <a href="itemcategory" style="background-color:#b4b3ae"></a>
                    <a href="itemcategory" style="background-color:#502006"></a>
                    <a href="itemcategory" style="background-color:#311e21"></a>
                    <a href="itemcategory" style="background-color:#e6b3af"></a>
                    <a href="itemcategory" style="background-color:#f3d213"></a>
                    <a href="itemcategory" style="background-color:#bd0316"></a>
                    <a href="itemcategory" style="background-color:#cd0c20"></a>
                </div>
            </div> -->
            <!-- End Color -->

        </div>
        <!-- End Filter -->
        <!-- <div class="widget widget-vote">
            <h2 class="widget-title">COMMUNITY POLL</h2>
            <p>What is your favorite color</p>
            <ul>
                <li><a href="itemcategory">Green</a></li>
                <li><a href="itemcategory" class="active">Red</a></li>
                <li><a href="itemcategory">Black</a></li>
                <li><a href="itemcategory">Magenta</a></li>
            </ul>
            <button>Vote</button>
        </div> -->
        <!-- End Vote -->
        <div class="widget widget-adv">
            <h2 class="title-widget-adv">
                <span>Week</span>
                <strong>big sale</strong>
            </h2>
            <div class="wrap-item">
                <div class="item">
                    <div class="item-widget-adv">
                        <div class="adv-widget-thumb">
                            <a href=""><img src="/assets/images/item3.jpg" width="300" height="500" /></a>
                        </div>
                        <div class="adv-widget-info">
                            <h3>New Collection</h3>
                            <h2><span>from</span> 40% off</h2>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-widget-adv">
                        <div class="adv-widget-thumb">
                            <a href=""><img src="/assets/images/item9.jpg" width="300" height="500" /></a>
                        </div>
                        <div class="adv-widget-info">
                            <h3>Quality usinesswear </h3>
                            <h2><span>from</span> 30% off</h2>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-widget-adv">
                        <div class="adv-widget-thumb">
                            <a href=""><img src="/assets/images/item6.jpg" width="300" height="500" /></a>
                        </div>
                        <div class="adv-widget-info">
                            <h3>Hanbags Style 2016</h3>
                            <h2><span>from</span> 20% off</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Adv -->
    </div>
    <!-- End Sidebar Shop -->
</div>
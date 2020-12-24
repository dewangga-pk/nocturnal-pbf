<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>{{app()->view->getSections()['title']}}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../home-1.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{app()->view->getSections()['title']}}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row">
    @forelse($parties as $row)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{$row->img}}" onerror="this.src = 'img/not-load.png'">
                <div class="caption">
                    <h3>{{$row->title}}</h3>
                    <p>{{$row->description}}</p>
                    <p>
                        <a href="" class="btn btn-primary load" role="button"  data-href="{{url('party-detail')}}" data-content=".box-content" data-img-load="#img-load">Visualizar <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-default pull-right" role="button"><i class="fa fa-2x fa-map-marker" aria-hidden="true"></i></a>
                    </p>
                </div>
            </div>
        </div>
    @empty
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center">Nenhuma festa no momento :(</h3>
                </div>
            </div>
        </div>
    @endforelse
</div>
@extends('_templates.home')

@section('title')
    Welcome to 
@stop

@section('produk')

  <div style="display:none;"> 
    {{ $no=0; }}
  </div>

  @foreach(array_slice($products->toArray(), 0, 4) as $product)
          
    <?php 
      $no++; 
      if (($no==1)||($no%5==0 )) {  
    ?>
    
    <div class="row-fluid">
      <ul class="thumbnails">

        <?php } ?>  

        <div class="span3">
          <div class="thumbnail">
            <img src="../img/{{ $product['image_path'] }}">
            <div class="caption">
              <h4>{{ $product['name'] }} <small>(Tersedia)</small></h4>
              <p>Rp. {{ $product['price'] }}<a data-toggle="modal" href="#tambah" class="btn btn-success pull-right">Pesan</a></p>
              <br/>
            </div>
          </div>
        </div>

        <?php 
          if ($no%4==0) {  
        ?>   

      </ul>
    </div>

    <?php } ?>  
    
  @endforeach
@stop

@section('modal')
  <section id="modals">
    <div id="tambah" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 id="myModalLabel" class="text-error">PERHATIAN!!!</h3>
      </div>
      <div class="modal-body">
        <blockquote>
          
          <p>- Mohon maaf atas ketidaksempurnaan sistem yang ada.</p>
          <p>- Saat ini, pemesanan hanya dapat dilakukan melalui via SMS.</p>
          <h4>- Sekian.</h4>
        </blockquote>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </div>   
  </section>
@stop
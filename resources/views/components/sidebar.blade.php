<div>
    <div class="sidebar-box ftco-animate">
        <div class="categories">
          <h3>Categories</h3>
          @foreach ($categories as $category)
          <li>
            <a href="@if($category->slug === 'wisata') {{ route('tour.index') }} @elseif($category->slug === 'kuliner') {{ route('culinary.index') }} @elseif($category->slug === 'kebudayaan') {{ route('culture.index') }} @elseif($category->slug === 'berita') {{ route('news.index') }} @elseif($category->slug === 'event') {{ route('event.index') }} @elseif($category->slug === 'tiket') {{ route('ticket.index') }} @endif">{{ Str::title($category->name) }}</a>
          </li>
          @endforeach
          <!-- <li><a href="#">Tour <span>(22)</span></a></li> -->
        </div>
      </div>
      {{-- <div class="sidebar-box ftco-animate">
        <h3>Recent Blog</h3>
        <?php foreach ($recent as $key): ?>
          
        <div class="block-21 mb-4 d-flex">
          <a class="blog-img mr-4" style="background-image: url(images/<?= $key["gambar"]; ?>);"></a>
          <div class="text">
            <h3 class="heading"><a href="blog-single-wisata.php?id_wisata=<?= $key["id_wisata"]; ?>"><?= $key["nama"]; ?></a></h3>
            <div class="meta">
              <div><a href=""><span class="icon-calendar"></span><?= date('M d, Y',strtotime($key["tanggal_posting"])); ?></a></div>
              <div><a href="#"><span class="icon-person"></span> Admin</a></div>
              <div><a href="blog-single-wisata.php?id_wisata=<?= $key["id_wisata"]; ?>"><span class="icon-chat"></span> <?= $key["jml"]; ?></a></div>
            </div>
          </div>
        </div>
        <?php endforeach ?>
    
      </div> --}}
</div>
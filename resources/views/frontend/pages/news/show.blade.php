@extends('frontend.layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ $item->image() }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">{{ $item->title }}</h1>
        </div>
      </div>
    </div>
  </section>
    
  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 order-md-last ftco-animate">
          <h2 class="mb-3">{{ $item->name }}</h2>
          <p>
            <img src="{{ $item->image() }}" alt="" class="img-fluid">
          </p>
          <p>
              {!! $item->text !!}
          </p>

          <div class="pt-5 mt-5">
            <h3 class="mb-5">{{ $item->countComment($item->category_id,$item->id) }} Comments</h3>
            @if ($item->countComment($item->category_id,$item->id) < 1)
            <p>No Comment</p>
            @endif
            <ul class="comment-list">
                @foreach ($item->getComments($item->category_id,$item->id) as $comment)
                <li class="comment">
                    <!-- <div class="vcard bio">
                      <img src="images/person_1.jpg" alt="Image placeholder">
                    </div> -->
                    <div class="comment-body">
                      <h3>{{ $comment->name }}</h3>
                      <div class="meta">
                          {{ $comment->created_at->translatedFormat('d/m/Y H:i:s') }}
                      </div>
                      <p>
                          {{ $comment->comment }}
                      </p>
                      <!-- <p><a href="#" class="reply">Reply</a></p> -->
                      <?php for($i = 0;$i < floor($item->score($item->category_id,$item->id));$i++): ?>
                        <span class="ion-ios-star text-warning"></span>
                      <?php endfor?>
                        <span class="rate ml-2"><a href="#" class="text-secondary">({{ $comment->score }})</a></span>
                    </div>
                  </li>
                @endforeach
            </ul>
            <!-- END comment-list -->
            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="{{ route('evaluation.store') }}" method="post" class="p-5 bg-light">
                @csrf
                <input type="hidden" name="content_id" value="<?= $item->id; ?>">
                <input type="hidden" name="category_id" value="<?= $item->category_id; ?>">
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name" name="name" required="required">
                </div>
                <div class="form-group">
                  <label for="comment">Message</label>
                  <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" required="required"></textarea>
                </div>
                <div class="form-group">
                  <label>Score</label>
                  <?php for ($i = 1;$i <= 5; $i++): ?>
                    <div class="custom-control custom-radio">
                      <input type="radio" name="score" value="<?= $i; ?>" class="custom-control-input" id="defaultUnchecked<?= $i; ?>" required="required">
                      <label for="defaultUnchecked<?= $i; ?>" class="custom-control-label">
                        <?php for ($j = 0;$j < $i; $j++): ?>
                          <span class="ion-ios-star text-warning"></span>
                        <?php endfor ?> 
                      </label>
                    </div>
                  <?php endfor ?>
                </div>
                <div class="form-group">
                  <input type="submit" name="submit_comment" class="btn py-3 px-4 btn-primary">
                </div>
              </form>
            </div>
          </div>

        </div>

        <div class="col-lg-4 sidebar ftco-animate">
          <x-Sidebar></x-Sidebar>
        </div>
      </div>
    </div>
  </section> 
@endsection
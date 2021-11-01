@extends('frontend.layouts.app')
@section('content')
<header class="text-center" style="margin-bottom: -70px;background-image: url({{ $item->image() }})">
    <h1>
        {{ $item->title }}
    </h1>
</header>    
<main>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                {{ $item->category->name }}
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>{{ $item->title }}</h1>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ $item->image() }}"
                                    class="xzoom" id="xzoom-default"
                                    xoriginal="{{ $item->image() }}" />
                            </div>
                        </div>
                        <h2>Deskripsi</h2>
                        <p>{!! $item->text !!}</p>
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
                                        <span class="fas fa-star text-warning"></span>
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
                                          <span class="fas fa-star text-warning"></span>
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
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Informasi</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Penilaian</th>
                                <td width="50%" class="text-right">
                                    @for ($i = 0; $i < floor($item->score($item->category_id,$item->id)); $i++)
                                    <span class="fas fa-star text-warning"></span>
                                    @endfor
                                    {{ $item->score($item->category_id,$item->id) }}
                                    
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Tanggal Dibuat</th>
                                <td width="50%" class="text-right">
                                    {{ $item->created_at->translatedFormat('d F Y') }}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Tanggal Diupdate</th>
                                <td width="50%" class="text-right">
                                    {{ $item->updated_at->translatedFormat('d F Y') }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <span class="p-2 btn btn-block rounded-0 btn-secondary mt-3 py-2">Berita</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/xzoom/xzoom.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/toastr/toastr.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('assets/frontend/xzoom/xzoom.min.js') }}"></script>
<script src="{{ asset('assets/frontend/toastr/toastr.min.js') }}"></script>
<script>
    $(document).ready(function() {
      $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 500,
        zoomHeight:300,
        title: false,
        tint: '#333',
        Xoffset: 15
      });
    });
</script>
@if (session('success'))
<script>
    toastr.success('{{ session('success') }}', 'Success !')
</script>
@endif
@endpush
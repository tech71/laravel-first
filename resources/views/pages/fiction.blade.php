@extends('layouts.app')

@section('content')
    {{-- <h1>
        {{ $title }}
    </h1>
    <p>
        index
    </p>
     --}}

     <div class="home">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4 head_center">Fiction</h1>
              <p class="lead para_center">Books for fiction lovers.</p>
            </div>
          </div>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 abs_btn" type="submit">Search</button>
              </form>

          <div class="home_book">
            <div class="card-deck home_book_show">
                <div class="card">
                  <img src="https://picsum.photos/200/300?grayscale" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos similique expedita ducimus laudantium obcaecati impedit sequi soluta ipsa, nemo ex pariatur dolores id tenetur beatae saepe fuga at voluptate consequatur.</p>
                    <a href="#" class="btn btn-primary">Read</a>
                  </div>
                </div>
                <div class="card">
                  <img src="https://picsum.photos/200/300?grayscale" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos similique expedita ducimus laudantium obcaecati impedit sequi soluta ipsa, nemo ex pariatur dolores id tenetur beatae saepe fuga at voluptate consequatur.</p>
                    <a href="#" class="btn btn-primary">Read</a>
                  </div>
                </div>
                <div class="card">
                  <img src="https://picsum.photos/200/300?grayscale" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos similique expedita ducimus laudantium obcaecati impedit sequi soluta ipsa, nemo ex pariatur dolores id tenetur beatae saepe fuga at voluptate consequatur.</p>
                    <a href="#" class="btn btn-primary">Read</a>
                  </div>
                </div>
              </div>

              {{-- 
                second
                --}}
                <div class="card-deck home_book_show">
                    <div class="card">
                      <img src="https://picsum.photos/200/300?grayscale" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos similique expedita ducimus laudantium obcaecati impedit sequi soluta ipsa, nemo ex pariatur dolores id tenetur beatae saepe fuga at voluptate consequatur.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                      </div>
                    </div>
                    <div class="card">
                      <img src="https://picsum.photos/200/300?grayscale" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos similique expedita ducimus laudantium obcaecati impedit sequi soluta ipsa, nemo ex pariatur dolores id tenetur beatae saepe fuga at voluptate consequatur.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                      </div>
                    </div>
                    <div class="card">
                      <img src="https://picsum.photos/200/300?grayscale" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos similique expedita ducimus laudantium obcaecati impedit sequi soluta ipsa, nemo ex pariatur dolores id tenetur beatae saepe fuga at voluptate consequatur.</p>
                        <a href="#" class="btn btn-primary">Read</a>
                      </div>
                    </div>
                  </div>
          </div>
     </div>
@endsection

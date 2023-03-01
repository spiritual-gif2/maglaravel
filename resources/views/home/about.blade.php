@extends('layout.app')
@section('title',$viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<!-- About Section-->
<section class="masthead page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg ms-auto">
                <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes
                    the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets
                    for easy customization.</p>
            </div>
            <div class="col-lg me-auto">
                <p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers,
                    and add your email address to the contact form to make it fully functional!</p>
            </div>
            <div class="col-lg me-auto">
                <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas dolores dolore cumque,
                    repudiandae optio unde explicabo assumenda quisquam odit similique consequatur, reprehenderit
                    veniam.</p>
            </div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="#">
                <i class="fas fa-download me-2"></i>
                Free Download!
            </a>
        </div>
    </div>

</section>
<!-- About Section Text -->
<div class="container d-flex text-center my-4">
    <div class="col-8 pt-4">
        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae similique optio dolore
            velit perspiciatis! Est dolore itaque repellendus autem nulla soluta nam eaque dicta in, ullam eveniet
            nobis possimus exercitationem.
            Odit, totam. Harum at sunt exercitationem porro. Nulla explicabo minus quidem ex hic molestiae! Ab
            recusandae neque ullam aliquid minus, optio dignissimos a quaerat iusto dolores voluptate nulla, laborum
            molestiae?
            Recusandae repellat nisi harum soluta nam consectetur maxime cupiditate, ipsam nesciunt? Laboriosam
            officiis eveniet sit, rerum rem odio earum adipisci suscipit molestiae, dolores possimus enim saepe
            quod, quasi necessitatibus! Nemo?
            Veritatis maxime quam, laudantium ipsa laborum quae eius a dolor aut numquam corporis recusandae.
            Consequuntur eum dignissimos fugit, officia vitae assumenda. A praesentium facere eius explicabo
            assumenda, possimus illo eveniet?
            Id iusto itaque veniam voluptatem laboriosam obcaecati illum, error consequatur pariatur? Libero tempora
            fuga harum expedita dolor optio doloribus aspernatur, cumque veniam nostrum. Facilis perferendis esse
            autem voluptate debitis doloribus!</p>
        <quote> {{$viewData["author"]}} </quote>
    </div>
    <div class="col-3">
        <img src="{{ asset('/assets/avataaars.svg') }}" alt="Avatar">
    </div>
</div>

@endsection
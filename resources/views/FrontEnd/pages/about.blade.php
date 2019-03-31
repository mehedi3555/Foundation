@extends('FrontEnd.master')
@section('title')
About Us
@endsection
@section('class2')
active
@endsection
@section('main-content')
<section class="about-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="about">
          <h4 class="text-center">About Us</h4>
          <p class="col-md-2 offset-md-5"></p>
        </div>
        <div class="about_welcome text-center">
          <p>Roya Foundation fosters charitable giving to alleviate the needs of poor communities and to establish long-term projects that transforms lives.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="tab-menu">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#vision">Vision</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#mission">Mission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#work">How We Work</a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="vision" class="container tab-pane active"><br>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> Roya Foundation fosters charitable giving to alleviate the needs of poor communities and to establish long-term projects so that their lives are transformed.</p><br><br><br>
            </div>
            <div id="mission" class="container tab-pane fade"><br>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> Providing children’s education, especially for orphans and girls, so that they do not become burden on the family and society.</p>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> Enabling people to self-resilient by providing them training and also giving the means to earn the livelihood.</p>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> Helping abandoned elderly people to lead a dignified life.</p>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> Supporting community development projects which benefits communities or people. </p>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> Providing treatment when it can cure and transform people’s lives.</p>
            </div>
            <div id="work" class="container tab-pane fade"><br>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> Roya Foundation’s speciality is not to just donate money or materials to needy people once in a while. But we would like to identify the causes of the sufferings or need and try to address that. We also like to be involved for longer period of time in each case, so that their lives are really transformed.</p>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> Through a number of reliable sources, we identify the individuals or community.Roya Foundation can also be approached by anyone who has such genuine cases.</p>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> An application to be formally made to the President of Roya Foundation detailing the need, how the need can be addressed and how the support will bring transformation to the subject individual or communities, lives in a transformative way. We would also like to know how the particular project will or can be monitored.</p>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> We seek and collect funds from individuals or institutions. Roya Foundation ensures accountability and transparency. This foundation keeps the donors informed about the utilisation of their donations.</p>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> We believe that the Foundation, through its work, can impact upon and contribute to the social development and economic prosperity of people and communities.</p>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> Roya Foundation does not discriminate in any way and at the same time totally a non-political and is committed to uphold the laws and regulations of the country. Roya Foundation’s activities carried in a way that no harm is caused to any other individual, society or environment.</p>
            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
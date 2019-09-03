<div class="card ">
  <div class="card-body">
    右边导航栏
  <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="{{ route('topics.index') }}">话题</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('categories.show', 1) }}">分享</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('categories.show', 2) }}">教程</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('categories.show', 3) }}">问答</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('categories.show', 4) }}">公告</a></li>
      </ul>
  </div>
  <div class="card-body">
    <a href="{{ route('topics.create') }}" class="btn btn-success btn-block" aria-label="Left Align">
      <i class="fas fa-pencil-alt mr-2"></i>  新建帖子
    </a>
  </div>
</div>
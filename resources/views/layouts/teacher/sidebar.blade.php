	<!-- Main navigation -->
    <div class="sidebar-section">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item">
							<a href="{{ route('teacher.dashboard') }}" class="nav-link @if(Request::is('lms/dashboard')) active @endif">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('teacher.courses')}}" class="nav-link @if(Request::is('lms/enrolled/courses')) active @endif">
								<i class="icon-books"></i>
								<span>
									Courses
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('teacher.assignments') }}" class="nav-link @if(Request::is('lms/assignment')) active @endif">
								<i class="icon-paperplane"></i>
								<span>
									Assignments
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('teacher.accounts') }}" class="nav-link @if(Request::is('lms/accounts')) active @endif">
								<i class="icon-piggy-bank"></i>
								<span>
									Accounts
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('teacher.workshops') }}" class="nav-link @if(Request::is('lms/workshop')) active @endif">
								<i class="icon-cabinet"></i>
								<span>
									Workshops
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('teacher.feeds') }}" class="nav-link @if(Request::is('lms/feeds')) active @endif">
								<i class="icon-arrow-right15"></i>
								<span>
									Feeds
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();" class="nav-link">
							<i class="icon-switch2"></i>
							{{ 'Logout' }}
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
							</form>
						</li>

					</ul>
				</div>
				<!-- /main navigation -->
	<!-- Main navigation -->
    <div class="sidebar-section">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item">
							<a href="{{ route('dashboard') }}" class="nav-link @if(Request::is('lms/dashboard')) active @endif">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('enrolled_courses')}}" class="nav-link @if(Request::is('lms/enrolled/courses')) active @endif">
								<i class="icon-books"></i>
								<span>
									Enrolled Courses
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('lms.assignments') }}" class="nav-link @if(Request::is('lms/assignment')) active @endif">
								<i class="icon-paperplane"></i>
								<span>
									Assignments
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('accounts') }}" class="nav-link @if(Request::is('lms/accounts')) active @endif">
								<i class="icon-piggy-bank"></i>
								<span>
									Accounts
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('workshops') }}" class="nav-link @if(Request::is('lms/workshop')) active @endif">
								<i class="icon-cabinet"></i>
								<span>
									Workshops
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('feeds') }}" class="nav-link @if(Request::is('lms/feeds')) active @endif">
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
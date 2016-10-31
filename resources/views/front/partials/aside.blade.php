				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Panel primary</h3>
				  </div>
					  <div class="panel-body">
						<ul class="list-group">
							@foreach ($categories as $category)
								<li class="list-group-item"><span class="badge">{{ $category->articles->count() }}</span>{{ $category->name }}</li>

							@endforeach

						</ul>

					  </div>
					</div>

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title">Panel primary</h3>
					  </div>
					  <div class="panel-body">
						<span class="label label-default">Default</span>
						<span class="label label-primary">Primary</span>
						<span class="label label-success">Success</span>
						<span class="label label-warning">Warning</span>
						<span class="label label-danger">Danger</span>
						<span class="label label-info">Info</span>
					  </div>
					</div>
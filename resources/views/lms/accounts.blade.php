@extends('layouts.dash')
@section('title','Skillinsiderz')
@section('content')

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    @include('layouts.sidbar')
    </div><!-- end off-canvas-menu -->
    <div class="dashboard-content-wrap">
        <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
            <i class="la la-bars mr-1"></i> Dashboard Nav
        </div>
        <div class="container-fluid">
            <div class="section-block mb-5"></div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="earning" role="tabpanel" aria-labelledby="earning-tab">
                    <div class="row">
                        <div class="col-lg-4 responsive-column-half">
                            <div class="card card-item dashboard-info-card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="icon-element flex-shrink-0 bg-1 text-white">
                                        <svg class="svg-icon-color-white" width="40" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m498.667 366.464c-9.551-14.036-25.752-17.463-43.352-9.181l-9.328 4.107c14.708-31.35 16.533-66.297 9.211-99.307-8.409-37.913-28.72-74.641-60.368-109.164-2.798-3.053-7.541-3.259-10.595-.46-3.053 2.798-3.259 7.541-.46 10.595 29.846 32.556 48.95 66.967 56.782 102.276 8.249 37.193 3.45 75.549-17.601 106.2l-93.342 41.099.077-10.542c.002-.266-.01-.532-.037-.797-2.155-21.667-18.717-38.93-40.276-41.98-.064-.01-.128-.018-.193-.025l-82.961-9.552c-31.901-4.541-40.117-23.658-83.321-34.559-2.985-25.33.994-52.299 11.9-79.336 16.425-40.718 48.558-80.278 93.104-114.711 16.603 11.772 90.676 13.237 107.252-1.949 8.492 6.449 16.597 13.095 24.147 19.822 1.429 1.274 3.211 1.9 4.986 1.9 2.064 0 4.12-.847 5.601-2.51 2.755-3.092 2.481-7.832-.611-10.587-8.276-7.373-17.178-14.648-26.515-21.679 2.188-9.278-.874-20.137-8.954-26.601 23.479-35.612 30.308-58.921 20.875-71.133-6.479-8.389-14.539-4.452-17.981-2.77-5.834 2.848-9.015 2.998-14.383-.514-10.241-6.701-21.005-6.917-31.576 0-5.436 3.557-9.717 3.557-15.151 0-10.242-6.701-21.002-6.917-31.575 0-5.43 3.554-8.623 3.334-14.365.48-3.438-1.709-11.489-5.711-18.009 2.679-9.221 11.868-3.052 34.442 18.843 68.843-1.341.725-2.619 1.576-3.812 2.548-8.708-9.196-22.975-18.787-43.607-16.483-17.113 1.915-29.732-3.74-37.306-8.82-3.44-2.304-8.098-1.386-10.404 2.052-2.306 3.44-1.387 8.098 2.052 10.404 9.655 6.473 25.701 13.679 47.322 11.268 15.94-1.788 26.756 6.358 33.489 14.648-.092.32-.177.642-.256.964-5.743.09-14.326.626-23.778 2.592-22.732 4.729-39.606 15.532-48.799 31.244-2.091 3.574-.889 8.168 2.685 10.26 3.575 2.091 8.168.888 10.259-2.686 13.674-23.369 47.051-26.227 60.308-26.406.057.165.124.328.184.492-47.308 36.493-80.244 77.19-97.932 121.04-11.18 27.717-15.646 55.485-13.379 81.874-7.191-1.064-14.465-1.635-21.774-1.685v-4.535c0-11.999-9.762-21.76-21.761-21.76h-34.424c-11.999 0-21.761 9.762-21.761 21.76v174.644c0 12 9.762 21.761 21.761 21.761h34.423c11.999 0 21.761-9.762 21.761-21.761v-2.136l75.091 27.949c10.091 3.755 20.667 5.66 31.434 5.66h111.886c17.106 0 33.785-4.84 48.233-13.995 149.259-94.62 140.195-88.733 141.057-89.497 12.023-10.672 14.269-28.746 5.224-42.04zm-177.58-256.172c-27.422 6.924-54.084 6.924-81.512 0-11.769-2.975-8.359-23.965 4.289-20.793 24.538 6.16 48.394 6.16 72.934 0 12.428-3.12 16.247 17.771 4.289 20.793zm-98.279-91.361c.059.029.118.059.174.087 10.149 5.044 19.042 5.318 29.251-1.361 12.776-8.363 14.163 5.046 30.938 5.046 8.076 0 12.533-2.916 15.787-5.046 5.437-3.558 9.719-3.556 15.155 0 10.254 6.71 18.932 6.379 29.376 1.342 1.543 5.562-1.949 22.143-24.185 55.249-11.042-.188-27.066 10.657-72.428.562-22.188-33.534-25.619-50.276-24.068-55.879zm261.085 377.99-139.534 88.417c-12.043 7.631-25.946 11.666-40.205 11.666h-111.886c-8.975 0-17.791-1.588-26.203-4.719l-80.323-29.897v-80.755c0-4.142-3.357-7.499-7.498-7.499s-7.498 3.357-7.498 7.499v98.894c0 3.73-3.035 6.764-6.764 6.764h-34.424c-3.73 0-6.764-3.035-6.764-6.764v-174.644c0-3.73 3.034-6.763 6.764-6.763h34.423c3.73 0 6.764 3.034 6.764 6.763v40.694c0 4.142 3.357 7.499 7.498 7.499s7.498-3.357 7.498-7.499v-21.162c62.031.475 75.978 33.17 118.476 39.181.064.01.128.018.192.025l82.957 9.551c14.526 2.097 25.705 13.664 27.323 28.227l-.104 14.264h-77.365c-4.141 0-7.499 3.357-7.499 7.499s3.357 7.499 7.499 7.499h84.809c.947 0 2.041-.21 2.993-.625.153-.068 136.263-59.995 136.422-60.065 9.811-4.36 18.756-4.983 24.822 3.931 4.716 6.927 3.672 16.292-2.373 22.019z"></path><path d="m282.307 340.22c4.141 0 7.499-3.357 7.499-7.499v-12.43c21.051-3.416 33.334-20.455 36.006-36.351 3.338-19.857-7.063-37.126-26.497-43.995-3.434-1.214-6.594-2.375-9.51-3.496v-47.812c8.871 1.471 14.197 6.062 14.585 6.405 3.046 2.77 7.76 2.565 10.555-.465 2.808-3.044 2.616-7.788-.428-10.596-.529-.488-9.713-8.757-24.712-10.486v-10.664c0-4.142-3.357-7.499-7.499-7.499-4.141 0-7.498 3.357-7.498 7.499v11.27c-1.808.346-3.66.786-5.563 1.359-12.72 3.831-22.228 14.738-24.815 28.463-2.347 12.455 1.602 24.433 10.305 31.259 4.997 3.919 11.287 7.507 20.073 11.343v59.301c-8.672-.367-14.01-1.995-23.322-8.087-3.465-2.266-8.113-1.297-10.38 2.17-2.267 3.465-1.296 8.113 2.17 10.38 12.241 8.008 20.424 10.097 31.532 10.529v11.903c0 4.142 3.357 7.499 7.499 7.499zm-18.316-116.838c-4.281-3.358-6.13-9.75-4.823-16.681 1.212-6.428 5.631-14.238 14.403-16.88.417-.126.827-.234 1.237-.344v40.505c-4.49-2.242-8.011-4.399-10.817-6.6zm30.326 30.703c18.66 6.595 17.504 22.617 16.705 27.37-1.654 9.841-8.878 20.347-21.217 23.509v-52.504c1.46.534 2.951 1.073 4.512 1.625z"></path></g></g></svg>
                                    </div>
                                    <div class="pl-4">
                                        <p class="card-text fs-18">My Balance</p>
                                        <h5 class="card-title pt-2 fs-26">120.20</h5>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column-half">
                            <div class="card card-item dashboard-info-card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="icon-element flex-shrink-0 bg-2 text-white">
                                        <svg class="svg-icon-color-white" width="40" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                                                        <g>
                                                            <g>
                                                                <path d="M422.503,270.613c-4.115,0-7.451,3.336-7.451,7.451c0,5.217-4.244,9.461-9.461,9.461c-5.216,0-9.461-4.244-9.461-9.461
                                                                    c0-4.116-3.336-7.451-7.451-7.451s-7.451,3.336-7.451,7.451c0,13.434,10.93,24.363,24.363,24.363
                                                                    c13.433,0,24.363-10.93,24.363-24.363C429.954,273.947,426.618,270.613,422.503,270.613z"/>
                                                            </g>
                                                        </g>
                                            <g>
                                                            <g>
                                                                <path d="M492.444,271.83l-20.972-6.718c-2.686-0.861-4.803-3.005-5.662-5.736c-4.42-14.053-11.09-27.246-19.825-39.214
                                                                    c-3.981-5.455-8.408-10.664-13.244-15.623c3.094-13.573,4.776-28.934,4.558-42.205c-0.312-18.985-4.106-30.12-11.598-34.044
                                                                    c-4.035-2.116-16.315-8.544-82.782,21.882c-1.574,0.72-3.044,1.607-4.405,2.623c-4.481-1.204-9.061-2.318-13.669-3.318
                                                                    c-0.555-0.121-1.127-0.228-1.686-0.346c5.386-11.766,8.531-24.545,9.122-37.737c0.184-4.112-2.999-7.594-7.111-7.777
                                                                    c-4.101-0.204-7.594,2.998-7.777,7.11c-0.971,21.691-9.969,42.1-25.335,57.467c-9.181,9.181-19.931,15.85-31.388,20.05
                                                                    c-19.869-2.788-40.107-2.788-59.976,0c-11.458-4.2-22.207-10.869-31.388-20.05c-16.394-16.394-25.423-38.191-25.423-61.376
                                                                    c0-23.186,9.029-44.982,25.423-61.376c16.394-16.395,38.192-25.424,61.376-25.424c23.184,0,44.982,9.029,61.376,25.424
                                                                    c6.588,6.588,12.032,14.106,16.181,22.343c1.851,3.676,6.332,5.156,10.007,3.304c3.676-1.85,5.155-6.331,3.304-10.006
                                                                    c-4.863-9.659-11.24-18.466-18.953-26.18c-19.209-19.209-44.749-29.788-71.914-29.788c-27.165,0-52.705,10.579-71.914,29.788
                                                                    c-19.209,19.21-29.788,44.749-29.788,71.914s10.579,52.705,29.788,71.914c5.541,5.541,11.569,10.306,17.945,14.298
                                                                    c0.002,0,0.004-0.001,0.006-0.001c-4.633,1.204-9.231,2.556-13.778,4.076c-3.903,1.305-6.009,5.526-4.704,9.43
                                                                    c1.304,3.903,5.527,6.009,9.429,4.705c40.636-13.585,85.396-13.585,126.032,0c0.784,0.262,1.58,0.386,2.363,0.386
                                                                    c3.117,0,6.023-1.972,7.066-5.091c1.305-3.903-0.801-8.125-4.704-9.43c-4.547-1.52-9.145-2.873-13.778-4.076
                                                                    c0.002,0,0.004,0.001,0.006,0.001c6.377-3.992,12.404-8.757,17.945-14.298c4.902-4.902,9.229-10.255,12.986-15.944
                                                                    c2.054,0.399,4.093,0.817,6.102,1.253c2.676,0.581,5.34,1.205,7.98,1.86c-0.083,0.324-0.168,0.647-0.237,0.976
                                                                    c-3.634,17.245-3.398,32.497,0.701,45.33c3.684,11.535,10.333,20.88,19.76,27.777c11.111,8.128,24.525,11.639,36.676,11.639
                                                                    c9.145,0,17.576-1.99,23.768-5.497c7.004-3.967,12.872-12.326,17.517-24.876c2.147,2.506,4.182,5.073,6.1,7.701
                                                                    c7.777,10.654,13.714,22.396,17.646,34.898c2.309,7.343,8.041,13.121,15.332,15.458l20.972,6.718
                                                                    c5.503,1.763,9.2,6.828,9.2,12.606v34.775c0,5.778-3.697,10.843-9.2,12.606l-33.789,10.823
                                                                    c-5.406,1.733-9.981,5.448-12.882,10.462c-13.275,22.942-34.146,41.927-62.037,56.428c-3.222,1.677-5.454,4.676-6.126,8.23
                                                                    l-10.822,57.303c-0.299,1.579-1.682,2.724-3.289,2.724h-35.187c-1.607,0-2.99-1.146-3.289-2.724l-5.994-31.669
                                                                    c-1.18-6.231-7.024-10.37-13.314-9.417c-15.157,2.292-30.775,3.453-46.418,3.453c-11.638,0-23.127-0.649-34.15-1.93
                                                                    c-6.095-0.701-11.773,3.454-12.912,9.472l-5.696,30.091c-0.299,1.579-1.682,2.724-3.289,2.724h-35.187
                                                                    c-1.607,0-2.99-1.146-3.293-2.748l-10.42-54.122c-0.671-3.487-2.861-6.452-6.012-8.135C96.25,401.595,71.12,359.191,71.12,304.351
                                                                    c0-27.708,6.062-52.209,18.017-72.825c11.156-19.239,27.45-35.146,48.429-47.281c3.562-2.061,4.779-6.619,2.719-10.182
                                                                    c-2.06-3.562-6.618-4.777-10.181-2.719C89.425,194.876,64.89,231.18,58.135,277.29v-0.001c-0.717-0.065-1.435-0.127-2.15-0.201
                                                                    c0.13-4.975-0.77-9.995-2.73-14.867c-4.323-10.746-13.203-18.502-22.624-19.759c-7.424-0.994-14.489,2.158-19.392,8.636
                                                                    c-7.109,9.394-5.95,16.828-3.727,21.41c3.753,7.733,13.4,13.203,29.409,16.642c-0.44,0.659-0.924,1.321-1.454,1.986
                                                                    c-9.459,11.863-20.603,14.486-27.839,14.733C3.392,306.012,0,309.413,0,313.652v0.036c0,4.181,3.299,7.591,7.476,7.782
                                                                    c0.535,0.025,1.094,0.038,1.676,0.038c9.156,0,23.851-3.377,37.969-21.08c2.229-2.794,4.045-5.742,5.441-8.788
                                                                    c1.406,0.159,2.757,0.295,4.051,0.415c0-0.003,0-0.005,0.001-0.008c-0.254,4.038-0.395,8.135-0.395,12.304
                                                                    c0,31.028,7.397,58.693,21.984,82.23c13.45,21.7,32.707,39.468,57.255,52.83l10.13,52.616c1.629,8.608,9.17,14.856,17.931,14.856
                                                                    h35.187c8.761,0,16.302-6.248,17.931-14.856l5.15-27.208c10.696,1.133,21.77,1.707,32.965,1.707c15.36,0,30.702-1.07,45.654-3.182
                                                                    l5.429,28.685c1.63,8.608,9.171,14.855,17.931,14.855h35.187c8.761,0,16.302-6.248,17.932-14.859l10.537-55.791
                                                                    c29.768-15.741,52.206-36.419,66.704-61.475c1.045-1.806,2.654-3.131,4.53-3.732l33.788-10.823
                                                                    C504.141,356.455,512,345.686,512,333.403v-34.775C512,286.346,504.141,275.577,492.444,271.83z M421.278,183.273
                                                                    c-2.868,24.526-10.561,45.506-18.291,49.884c-8.786,4.977-29.071,5.938-44.301-5.203c-15.248-11.154-20.323-31.212-14.678-58.006
                                                                    c0-0.001,0-0.001,0-0.001c0.567-2.691,2.479-5.019,5.114-6.225c37.304-17.076,58.811-22.661,66.801-22.661
                                                                    c1.206,0,2.104,0.127,2.702,0.361C421.025,143.98,424.173,158.521,421.278,183.273z M20.921,266.001
                                                                    c-0.771-1.59,1.049-4.385,2.203-5.911c1.829-2.416,3.514-2.91,4.787-2.91c0.269,0,0.52,0.022,0.75,0.053
                                                                    c3.426,0.457,8.226,4.227,10.769,10.548c0.599,1.488,1.377,3.953,1.559,7.027C30.674,272.671,22.66,269.59,20.921,266.001z"/>
                                                            </g>
                                                        </g>
                                            <g>
                                                            <g>
                                                                <path d="M237.918,98.277V71.613c9.195,0.657,12.611,4.86,15.763,4.86c3.941,0,5.78-4.991,5.78-7.487
                                                                    c0-6.437-12.611-9.195-21.543-9.458V55.98c0-1.576-1.971-3.021-3.941-3.021c-2.234,0-3.81,1.445-3.81,3.021v3.809
                                                                    c-12.479,1.314-24.958,7.882-24.958,24.433c0,16.814,13.136,21.543,24.958,25.746v30.869
                                                                    c-13.399-1.051-16.945-10.246-21.28-10.246c-3.284,0-6.042,4.335-6.042,7.488c0,6.436,11.034,15.237,27.322,15.5h0v4.072
                                                                    c0,1.576,1.577,3.021,3.81,3.021c1.971,0,3.941-1.445,3.941-3.021v-4.466c14.187-1.971,23.907-10.903,23.907-27.06
                                                                    C261.825,108.261,249.346,102.48,237.918,98.277z M230.955,95.782c-6.962-2.627-12.61-5.385-12.61-12.872
                                                                    c0-6.831,5.254-10.115,12.61-11.034V95.782z M237.129,140.574v-27.716c6.436,2.758,11.559,6.436,11.559,14.711
                                                                    C248.688,135.058,244.222,139.261,237.129,140.574z"/>
                                                            </g>
                                                        </g>
                                                </svg>
                                    </div>
                                    <div class="pl-4">
                                        <p class="card-text fs-18">Paid Fee</p>
                                        <h5 class="card-title pt-2 fs-26">255.30</h5>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column-half">
                            <div class="card card-item dashboard-info-card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="icon-element flex-shrink-0 bg-3 text-white">
                                        <svg class="svg-icon-color-white" width="40" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 478.856 478.856"  xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M406.872,160.017c-0.005,0-0.011,0-0.016,0h-400c-3.782-0.004-6.852,3.058-6.856,6.84c0,0.005,0,0.011,0,0.016v192
                                                                c-0.004,3.782,3.058,6.852,6.84,6.856c0.005,0,0.011,0,0.016,0h272c3.786,0,6.856-3.07,6.856-6.856
                                                                c0-3.786-3.07-6.856-6.856-6.856H13.712V173.729H400v17.144c-0.004,3.782,3.058,6.852,6.84,6.856c0.005,0,0.011,0,0.016,0
                                                                c3.782,0.004,6.852-3.058,6.856-6.84c0-0.005,0-0.011,0-0.016v-24C413.716,163.091,410.654,160.022,406.872,160.017z"/>
                                                        </g>
                                                    </g>
                                            <g>
                                                        <g>
                                                            <path d="M360.36,128.185l-320-72c-1.776-0.397-3.637-0.075-5.176,0.896c-1.537,0.979-2.624,2.526-3.024,4.304l-16,72
                                                                c-0.822,3.698,1.51,7.362,5.208,8.184c3.698,0.822,7.362-1.51,8.184-5.208l14.504-65.288l313.296,70.488
                                                                c0.496,0.115,1.003,0.172,1.512,0.168c3.786-0.007,6.85-3.082,6.844-6.868C365.702,131.66,363.482,128.89,360.36,128.185z"/>
                                                        </g>
                                                    </g>
                                            <g>
                                                        <g>
                                                            <path d="M321.504,88.513l-192-80c-3.337-1.391-7.182,0.038-8.8,3.272l-16,32c-1.807,3.342-0.563,7.517,2.78,9.324
                                                                c3.342,1.807,7.517,0.563,9.324-2.78c0.071-0.131,0.138-0.265,0.2-0.401v0.016l13.128-26.272l186.072,77.528
                                                                c3.504,1.462,7.53-0.192,8.992-3.696C326.662,94.002,325.008,89.976,321.504,88.513z"/>
                                                        </g>
                                                    </g>
                                            <g>
                                                        <g>
                                                            <path d="M326.352,192.017h-63.496c-3.786,0-6.856,3.07-6.856,6.856c0,3.786,3.07,6.856,6.856,6.856h63.496
                                                                c3.786,0,6.856-3.07,6.856-6.856S330.138,192.017,326.352,192.017z"/>
                                                        </g>
                                                    </g>
                                            <g>
                                                        <g>
                                                            <path d="M198.856,192.473c-38.881,0-70.4,31.519-70.4,70.4c0.04,38.864,31.536,70.36,70.4,70.4c38.881,0,70.4-31.519,70.4-70.4
                                                                S237.737,192.473,198.856,192.473z M198.856,320.473c-31.812,0-57.6-25.788-57.6-57.6c0.035-31.797,25.803-57.565,57.6-57.6
                                                                c31.812,0,57.6,25.788,57.6,57.6C256.456,294.685,230.668,320.473,198.856,320.473z"/>
                                                        </g>
                                                    </g>
                                            <g>
                                                        <g>
                                                            <path d="M390.856,214.873c-42.4,0-88,10.016-88,32v192c0,21.984,45.6,32,88,32c42.4,0,88-10.016,88-32v-192
                                                                C478.856,224.889,433.256,214.873,390.856,214.873z M462.856,438.753c-1.208,4.44-25.2,16.12-72,16.12s-70.792-11.68-72-16
                                                                v-12.576c17.024,8.576,45.144,12.576,72,12.576c26.856,0,54.984-4.04,72-12.584V438.753z M462.856,406.753
                                                                c-1.208,4.44-25.2,16.12-72,16.12s-70.792-11.68-72-16v-12.576c17.024,8.576,45.144,12.576,72,12.576
                                                                c26.856,0,54.984-4.04,72-12.584V406.753z M462.856,374.753c-1.208,4.44-25.2,16.12-72,16.12s-70.792-11.68-72-16v-12.576
                                                                c17.024,8.576,45.144,12.576,72,12.576c26.856,0,54.984-4.04,72-12.584V374.753z M462.856,342.753
                                                                c-1.208,4.44-25.2,16.12-72,16.12s-70.792-11.68-72-16v-12.576c17.024,8.576,45.144,12.576,72,12.576
                                                                c26.856,0,54.984-4.04,72-12.584V342.753z M462.856,310.753c-1.208,4.44-25.2,16.12-72,16.12s-70.792-11.68-72-16v-12.576
                                                                c17.024,8.536,45.144,12.576,72,12.576c26.856,0,54.984-4.04,72-12.584V310.753z M462.856,278.753
                                                                c-1.208,4.44-25.2,16.12-72,16.12s-70.792-11.68-72-16v-12.576c17.024,8.536,45.144,12.576,72,12.576
                                                                c26.856,0,54.984-4.04,72-12.584V278.753z M390.856,262.873c-46.728,0-70.712-11.648-72-15.856v-0.048
                                                                c1.288-4.456,25.272-16.096,72-16.096c46.4,0,70.4,11.472,72,16C461.256,251.401,437.256,262.873,390.856,262.873z"/>
                                                        </g>
                                                    </g>
                                            <g>
                                                        <g>
                                                            <path d="M134.856,320.009H74.384l-28.672-31.36v-52l31.664-30.92h57.48c3.786,0,6.856-3.07,6.856-6.856
                                                                c0-3.786-3.07-6.856-6.856-6.856H74.592c-1.792-0.004-3.515,0.694-4.8,1.944l-35.736,34.856c-1.335,1.56-2.067,3.547-2.064,5.6
                                                                v56.896c0,1.711,0.639,3.36,1.792,4.624l32.504,35.552c1.299,1.422,3.137,2.233,5.064,2.232h63.504
                                                                c3.786,0,6.856-3.07,6.856-6.856C141.712,323.079,138.643,320.009,134.856,320.009z"/>
                                                        </g>
                                                    </g>
                                            <g>
                                                        <g>
                                                            <path d="M202.856,254.873h-8c-2.488,0-4-1.392-4-2c0-0.608,1.512-2,4-2h20c4.418,0,8-3.582,8-8s-3.582-8-8-8h-8
                                                                c0-4.418-3.582-8-8-8s-8,3.582-8,8v0.36c-8.873,1.253-15.595,8.648-16,17.6c0.573,10.489,9.507,18.548,20,18.04h8
                                                                c2.488,0,4,1.392,4,2c0,0.608-1.512,2-4,2h-20c-4.418,0-8,3.582-8,8s3.582,8,8,8h8c0,4.418,3.582,8,8,8s8-3.582,8-8v-0.36
                                                                c8.873-1.253,15.595-8.648,16-17.6C222.283,262.424,213.349,254.365,202.856,254.873z"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                    </div>
                                    <div class="pl-4">
                                        <p class="card-text fs-18">Total Fee</p>
                                        <h5 class="card-title pt-2 fs-26">504.10</h5>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-4 -->
                    </div><!-- end row -->
                    <div class="row">
                        <table class="table table-bordered tabler-hovered">
                            <thead>
                                <tr>
                                    <th>Course </th>
                                    <th>Batch</th>
                                    <th>Paid</th>
                                    <th>Pending</th>
                                </tr>
                            </thead>
                            @foreach($accounts as $account)
                                <tr>
                                    <td>{{ $account->course->title }}</td>
                                    <td>{{ $account->badge->code }}</td>
                                    <td>Rs {{ $account->paid }}</td>
                                    <td>Rs {{ $account->pending }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div><!-- end tab-pane -->
            </div><!-- end tab-content -->
            <div class="row align-items-center dashboard-copyright-content pb-4">
                <div class="col-lg-6">
                    <p class="copy-desc">&copy; 2021 Aduca. All Rights Reserved. by <a href="https://techydevs.com/">TechyDevs</a></p>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 justify-content-end">
                        <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->


@endsection
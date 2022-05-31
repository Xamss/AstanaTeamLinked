
<!DOCTYPE HTML>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <link rel="stylesheet" href="/app.css"/>
    <link rel="stylesheet" href="https://d3a1eo0ozlzntn.cloudfront.net/assets/css/main_v2-built.dba8de4033.v2.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700;800&display=swap" rel="stylesheet"/>
</head>
<body>
{{View::make('components/header')}}
<div class="header">
    <div class="container-mess">
        <div class="header-profile">
            <img src="images/profile.png" alt=""/>
        </div>
    </div>
</div>
@auth
    <div class="header-top">
        <h2>
            {{$user->first_name}}
            <br/>
            {{$user->last_name}}
        </h2>
        <small>Web content manager<br>Kazakhstan, Nur-Sultan</small>
    </div>
    <div class="about">
        <div class="container-mess">
            <div class="about-top">
                <h3 class="top-title">About Me</h3>
                <span class="line"></span>
                <p class="about-p">Mi sit amet mauris commodo quis imperdiet. Dignissim sodales ut eu sem integer. Tincidunt augue interdum velit euismod in pellentesque massa placerat.</p>
                <p> Tellus in metus vulputate eu. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat. Libero justo laoreet sit amet cursus sit amet dictum. Aliquam sem fringilla ut morbi tincidunt augue. Maecenas pharetra convallis posuere morbi leo.</p>
            </div>
        </div>
    </div>
    <div class="experience">
        <div class="container-mess">
            <div class="exp-top">
                <h3 class="top-title">Journey</h3>
                <span class="line"></span>
            </div>
            <div class="exp-devide">
                <h4>Experience</h4>
                <span class="devide-line">
				</span>

                <div class="exp-devide-grid-right">
                    <h5>School principal</h5>
                    <small>Occupation: 2013-Current</small>
                    <p>Id interdum velit laoreet id donec ultrices tincidunt arcu. Risus pretium quam vulputate dignissim suspendisse in est ante in. Maecenas pharetra convallis posuere morbi leo.</p>
                </div>
                <div class="exp-devide-grid-left">
                    <h5>Junior UX designer</h5>
                    <small>Occupation: 2010-2012</small>
                    <p>Id interdum velit laoreet id donec ultrices tincidunt arcu. Risus pretium quam vulputate dignissim suspendisse in est ante in. Maecenas pharetra convallis posuere morbi leo. </p>
                </div>
                <div class="exp-devide-grid-rightb">
                    <h5>Self-proclaimed designer</h5>
                    <small>Occupation: 2006-2010</small>
                    <p>Id interdum velit laoreet id donec ultrices tincidunt arcu. Risus pretium quam vulputate dignissim suspendisse in est ante in. Maecenas pharetra convallis posuere morbi leo.</p>
                </div>
            </div>
            <div class="exp-devide education">
                <h4>Education</h4>
                <span class="devide-line">
				</span>
                <div class="exp-devide-grid-right">
                    <h5>Doctoral degree</h5>
                    <small>Occupation: 2014-2012</small>
                    <p>Id interdum velit laoreet id donec ultrices tincidunt arcu. Risus pretium quam vulputate dignissim suspendisse in est ante in. Maecenas pharetra convallis posuere morbi leo. </p>
                </div>
                <div class="exp-devide-grid-left">
                    <h5>College</h5>
                    <small>Occupation: 2012-2010</small>
                    <p>Id interdum velit laoreet id donec ultrices tincidunt arcu. Risus pretium quam vulputate dignissim suspendisse in est ante in. Maecenas pharetra convallis posuere morbi leo. </p>
                </div>
                <div class="exp-devide-grid-rightb">
                    <h5>Kindergarden</h5>
                    <small>Occupation: 2006-2010</small>
                    <p>Id interdum velit laoreet id donec ultrices tincidunt arcu. Risus pretium quam vulputate dignissim suspendisse in est ante in. Maecenas pharetra convallis posuere morbi leo. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="skills">
        <div class="container-mess">
            <div class="skills-top">
                <h3 class="top-title">Skills</h3>
                <span class="line"></span>
                <div class="row skill-grids text-center">
                    <div class="col-md-3 skill-column">
                        <div class="skill-grid">
                            <div class="circle" id="circles-1"></div>
                            <h3>React</h3>
                            <p>Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque.</p>
                        </div>
                    </div>
                    <div class="col-md-3 skill-column">
                        <div class="skill-grid">
                            <div class="circle" id="circles-2"></div>
                            <h3>Artist</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-md-3 skill-column">
                        <div class="skill-grid">
                            <div class="circle" id="circles-3"></div>
                            <h3>HTML/CSS</h3>
                            <p>Mi bibendum neque egestas congue quisque egestas diam in.</p>
                        </div>
                    </div>
                    <div class="col-md-3 skill-column">
                        <div class="skill-grid">
                            <div class="circle" id="circles-4"></div>
                            <h3>Javascript</h3>
                            <p>Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque.</p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/circles.js"></script>
        <script>
            var percent = [
                [76], [57], [89], [30]
            ];
            var colors = [
                ['#fff', '#2980b9'], ['#fff', '#2980b9'], ['#fff', '#2980b9'], ['#fff', '#2980b9']
            ];
            for (var i = 1; i <= 4; i++) {
                var child = document.getElementById('circles-' + i),
                    percentage = 50 + (i * 10);

                Circles.create({
                    id:         child.id,
                    percentage: percent[i-1],
                    radius:     80,
                    width:      10,
                    number:   	percent[i-1],
                    text:       '%',
                    colors:     colors[i - 1]
                });
            }
        </script>

    </div>

    <div class="footer">
        <div class="container-mess">
            <p class="developer">Astana IT team</p>
        </div>
        @else
            You're not logged in
    </div>
@endauth
</body>
</html>




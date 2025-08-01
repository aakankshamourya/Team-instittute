<?php require_once '<header/header.php';?>
<style>
    .main-timeline{ font-family: 'Heebo', sans-serif; }
.main-timeline:after{
    content: '';
    display: block;
    clear: both;
}
.main-timeline .timeline{
    width: 70%;
    padding: 50px 0 0 0;
    margin: 0 5px 5px 0;
    float: left;
}
.main-timeline .timeline-content{
    color: #fff;
    background: #dd5458;
    min-height: 125px;
    padding: 20px 20px 20px 275px;
    border-radius: 40px;
    display: block;
    position: relative;
}
.main-timeline .timeline-content:hover{ text-decoration: none; }
.main-timeline .timeline-content:before{
    content: '';
    background-color: #f91d21;
    height: calc(100% + 50px);
    width: 125px;
    border-radius: 40px 40px 0 0;
    box-shadow: 0 0 10px -2px rgba(0,0,0,0.3);
    position: absolute;
    left: 125px;
    bottom: 0;
}
.main-timeline .timeline-icon{
    color: #fff;
    font-size: 60px;
    transform: translateY(-50%);
    position: absolute;
    left: 158px;
    top: 50%;
}
.main-timeline .timeline-year{
    font-size: 40px;
    font-weight: 600;
    transform: translateY(-50%);
    position: absolute;
    left: 18px;
    top: 50%;
}
.main-timeline .title{
    font-size: 22px;
    font-weight: 500;
    text-transform: capitalize;
    letter-spacing: 0.5px;
    margin: 0 0 5px;
}
.main-timeline .description{
    color: rgba(255, 255, 255, 0.85);
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    letter-spacing: 1px;
    margin: 0;
}
.main-timeline .timeline:nth-child(even){
    margin: 0 0 5px 5px;
    float: right;
}
.main-timeline .timeline:nth-child(even) .timeline-content{
    padding: 20px 275px 20px 20px;
}
.main-timeline .timeline:nth-child(even) .timeline-content:before{
    left: auto;
    right: 125px;
}
.main-timeline .timeline:nth-child(even) .timeline-icon{
    left: auto;
    right: 156px;
}
.main-timeline .timeline:nth-child(even) .timeline-year{
    left: auto;
    right: 18px;
}
.main-timeline .timeline:nth-child(4n+2) .timeline-content{ background-color: #0f2d75; }
.main-timeline .timeline:nth-child(4n+2) .timeline-content:before{ background-color: #0e3fb2; }
@media screen and (max-width:767px){
    .main-timeline .timeline,
    .main-timeline .timeline:nth-child(even){
        width: 100%;
        margin: 0 0 30px;
    }
}
@media screen and (max-width:576px){
    .main-timeline .timeline,
    .main-timeline .timeline:nth-child(even){
        padding: 0 0 40px;
    }
    .main-timeline .timeline-content,
    .main-timeline .timeline:nth-child(even) .timeline-content{
        text-align: center;
        padding: 65px 20px 55px;
    }
    .main-timeline .timeline-content:before,
    .main-timeline .timeline:nth-child(even) .timeline-content:before{
        width: 80px;
        height: 80px;
        border-radius: 0 0 30px 30px;
        transform: translateX(-50%);
        left: 50%;
        bottom: -40px;
    }
    .main-timeline .timeline-year,
    .main-timeline .timeline:nth-child(even) .timeline-year{
        transform: translateY(0) translateX(-50%);
        left: 50%;
        right: auto;
        top: 8px;
    }
    .main-timeline .timeline-icon,
    .main-timeline .timeline:nth-child(even) .timeline-icon{
        font-size: 45px;
        transform: translateY(0) translateX(-50%);
        left: 50%;
        right: auto;
        top: auto;
        bottom: -35px;
    }
}
    </style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="main-timeline">
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">2021</div>
                        <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                        <h3 class="title">Web Designing</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">2020</div>
                        <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                        <h3 class="title">Web Development</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">2021</div>
                        <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                        <h3 class="title">Web Designing</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">2020</div>
                        <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                        <h3 class="title">Web Development</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once '<header/footer.php';?>

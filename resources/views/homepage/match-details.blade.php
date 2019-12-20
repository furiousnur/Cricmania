@php

    $match_info = explode(')',$item[0]->de);
    $score_info = explode(',',$match_info[0]);

    $team_score=str_replace('(', '',$score_info[0]);


@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ScoreBoard</title>

    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}"/>

</head>
<body>
<!--Whole Container -->
<div class="rca-container rca-margin">

    <!--Live ScoreBoard -->
    <div class="rca-row">
        <!--Widget Inner -->
        <div class="rca-column-6">
            <!--Match Series-->
            <div class="rca-medium-widget rca-padding rca-live-season rca-top-border">
                <div align="center" class="rca-live-label">
                    {{ $item[0]->si }}
                    <br><br><br><br>
                    @if(!strpos($item[0]->de,'- Live -'))
                        <p>
                            <span style="color: orange">Summery:</span> {{ $item[0]->de }}
                        </p>
                    @endif
                </div>
                <div class="rca-clear"></div>
                @if(strpos($item[0]->de,'- Live -'))
                    <div class="live-score">
                        <div class="rca-padding">
                            <h3 class="rca-match-title">
                                <a href="/main.html">
                                    {{ $team_score ?? '' }}
                                </a>
                            </h3>
                            <p class="rca-match-info">
                                <span>IND: 16/1 in 1.0</span>
                                <span>CRR:4.1</span>
                                <span>Req RR:10.1</span>
                            </p>
                            <p class="rca-match-info">
                                <span>IND: 220/7 in 1.0</span>
                                <span>& 101/4 in 20.0</span>
                            </p>
                            <div class="rca-top-padding">
                                <div class="rca-batsman striker">
                                    <span class="player">{!! $score_info[1] ?? '' !!}</span>
                                </div>
                                <div class="rca-batsman">
                                    <span class="player">{!! $score_info[2] ?? '' !!}</span>
                                </div>
                            </div>
                            <div class="rca-ball-detail">
                                <div class="rca-match-schedule">
                                    Over: 24
                                </div>
                                <ul class="rca-ball-by">
                                    <li class="b6">6</li>
                                    <li class="">1wd</li>
                                    <li class="w">w</li>
                                    <li class="">1</li>
                                    <li class="">2</li>
                                    <li class="b6">4</li>
                                </ul>
                                <div class="rca-bowler-info">
                                    <span style="color: orange;"> Bowling : {!! $score_info[3] ?? '' !!} </span>
                                </div>
                            </div>
                        </div>
                        <div class="rca-top-padding rca-score-status">
                            <div class="rca-status-scroll">
                                FOUR!!! from {!! $score_info[1] ?? '' !!}
                            </div>
                            <ul class="rca-bullet-list">
                                <li class="active" data-tab="#status1"></li>
                                <li data-tab="#status2"></li>
                                <li data-tab="#status3"></li>
                            </ul>
                        </div>
                    </div>
                @endif

            </div>
            <!--Match Schedule Info-->
            <div class="rca-mini-widget rca-history-info">
                <div class="rca-row">
                    <span class="rca-col rca-history-title">Match:</span>
                    <span class="rca-col"> Team X vs Team Y - 6th Qualifying Match</span>
                </div>
                <div class="rca-row">
                    <span class="rca-col rca-history-title">Series:</span>
                    <span class="rca-col"> Developer season 2014</span>
                </div>
                <div class="rca-row">
                    <span class="rca-col rca-history-title">Date (GMT):</span>
                    <span class="rca-col"> 24th Sep 2014 00:00 GMT</span>
                </div>
                <div class="rca-row">
                    <span class="rca-col rca-history-title">Venue:</span>
                    <span class="rca-col"> India</span>
                </div>
                <div class="rca-row">
                    <span class="rca-col rca-history-title">Match Type:</span>
                    <span class="rca-col"> Twenty20 Cricket Match</span>
                </div>
                <div class="rca-row">
                    <span class="rca-col rca-history-title">Toss:</span>
                    <span class="rca-col"> Team X won the toss and chose to bat first</span>
                </div>
            </div>

            <!--Completed Match Series-->
            <div class="rca-medium-widget rca-padding rca-completed-match rca-top-border">
                <div class="rca-right rca-basic-text">12th Feb 2016</div>
                <div class="rca-clear"></div>
                <div class="rca-padding">
                    <h3 class="rca-match-title rca-theme-text">
                        India won by 69 runs
                    </h3>
                    <p class="rca-match-info">
                        <span>2nd T20 Match</span>
                    </p>
                    <div class="rca-top-padding">
                        <div class="rca-team-score">
                            <span class="team">India</span>
                            <span>196/6 in 20.0</span>
                        </div>
                        <div class="rca-team-score">
                            <span class="team">Sri Lanka</span>
                            <span>127/9 in 20.0</span>
                        </div>
                    </div>
                    <div class="rca-man-match">
                        <h3>Man of the Match <span>S Dawan</span></h3>
                        <div class="rca-padding">
                            <p class="rca-man-match-record"><span class="title">Runs</span><span>51(25)</span></p>
                            <p class="rca-man-match-record"><span class="title">Boundries</span><span>7X4, 2X6</span></p>
                            <p class="rca-man-match-record"><span class="title">Wickets</span><span>Nil</span></p>
                        </div>
                    </div>
                </div>
            </div>


            <!--Upcoming Match Schedule-->
            <div class="rca-medium-widget rca-padding rca-completed-match rca-top-border">
                <div class="rca-right rca-basic-text">12th Feb 2016</div>
                <div class="rca-clear"></div>
                <div class="rca-padding">
                    <h3 class="rca-match-title rca-theme-text">
                        BAN VS IND
                    </h3>
                    <p class="rca-match-info">
                        <span>2nd T20 Match</span>
                    </p>
                    <div class="rca-top-padding">
                        <div class="rca-teams rca-table">
                            <div class="team rca-cell">South Africa</div>
                            <div class="rca-vs rca-cell"></div>
                            <div class="team rca-cell">Bakistan</div>
                        </div>
                    </div>
                    <div class="rca-match-start">
                        <h3>Starts in</h3>
                        <div class="rca-padding">
                            <h2>1 day</h2>
                            <p class="rca-center">
                                Wed 24th Feb 2016, 7:00 pm (local time)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rca-column-6">
            <!--Match Series-->
            <div class="rca-medium-widget rca-top-border ">
                <ul class="rca-tab-list">
                    <li class="rca-tab-link active" data-tab="tab-41" onclick="showTab(this);">SCORECARD</li>
                    <li class="rca-tab-link" data-tab="tab-42" onclick="showTab(this);">SQUAD</li>
                </ul>
                <div id="tab-41" class="rca-tab-content rca-padding active">
                    <div class="rca-batting-score rca-padding">
                        <h3>Team X Batting: <strong> 92/2 in 8.5</strong></h3>
                        <div class="rca-row">
                            <div class="rca-header rca-table">
                                <div class="rca-col rca-player">
                                    Batsmen
                                </div>
                                <div class="rca-col">
                                    R
                                </div>
                                <div class="rca-col">
                                    4s
                                </div>
                                <div class="rca-col">
                                    6s
                                </div>
                                <div class="rca-col">
                                    SR
                                </div>
                            </div>
                        </div>
                        <div class="rca-row">
                            <div class="rca-table">
                                <div class="rca-col rca-player">
                                    Player x1*
                                </div>
                                <div class="rca-col">
                                    8 (7)
                                </div>
                                <div class="rca-col">
                                    0
                                </div>
                                <div class="rca-col">
                                    1
                                </div>
                                <div class="rca-col">
                                    114.29
                                </div>
                            </div>
                        </div>
                        <div class="rca-row">
                            <div class="rca-table">
                                <div class="rca-col rca-player">
                                    Player x2
                                </div>
                                <div class="rca-col">
                                    8 (7)
                                </div>
                                <div class="rca-col">
                                    0
                                </div>
                                <div class="rca-col">
                                    1
                                </div>
                                <div class="rca-col">
                                    114.29
                                </div>
                            </div>
                        </div>
                        <div class="rca-clear"></div>
                        <div class="rca-padding">
                            <span>Fours: <strong>2</strong></span>, <span>Sixes: <strong>1</strong></span>, <span>Extras: <strong>9</strong></span>
                        </div>
                    </div>
                    <div class="rca-bowling-score rca-padding">
                        <h3>Team X Bowling:</h3>
                        <div class="rca-row">
                            <div class="rca-header rca-table">
                                <div class="rca-col rca-player">
                                    Bowler
                                </div>
                                <div class="rca-col small">
                                    O
                                </div>
                                <div class="rca-col small">
                                    M
                                </div>
                                <div class="rca-col small">
                                    R
                                </div>
                                <div class="rca-col small">
                                    W
                                </div>
                                <div class="rca-col small">
                                    Econ
                                </div>
                                <div class="rca-col small">
                                    Extras
                                </div>
                            </div>
                        </div>
                        <div class="rca-row">
                            <div class="rca-table">
                                <div class="rca-col rca-player">
                                    Player Y
                                </div>
                                <div class="rca-col small">
                                    6
                                </div>
                                <div class="rca-col small">
                                    2
                                </div>
                                <div class="rca-col small">
                                    38
                                </div>
                                <div class="rca-col small">
                                    2
                                </div>
                                <div class="rca-col small">
                                    7.00
                                </div>
                                <div class="rca-col small">
                                    3
                                </div>
                            </div>
                        </div>
                        <div class="rca-row">
                            <div class="rca-table">
                                <div class="rca-col rca-player">
                                    Player Y
                                </div>
                                <div class="rca-col small">
                                    6
                                </div>
                                <div class="rca-col small">
                                    2
                                </div>
                                <div class="rca-col small">
                                    38
                                </div>
                                <div class="rca-col small">
                                    2
                                </div>
                                <div class="rca-col small">
                                    7.00
                                </div>
                                <div class="rca-col small">
                                    3
                                </div>
                            </div>
                        </div>
                        <div class="rca-clear"></div>
                    </div>
                </div>
                <div id="tab-42" class="rca-tab-content rca-padding">
                    <ul class="rca-tab-list small">
                        <li class="rca-tab-link active" data-tab="tab-411" onclick="showTab(this);">Team X</li>
                        <li class="rca-tab-link" data-tab="tab-412" onclick="showTab(this);">Team Y</li>
                    </ul>
                    <div id="tab-411" class="rca-tab-content rca-padding active">
                        <!-- <div class="rca-padding">
                          <div class="rca-switch filled">
                            <span class="active">Team X</span><span>Team Y</span>
                          </div>
                        </div> -->
                        <div class="rca-batting-score">
                            <h3>Team X (11)</h3>
                            <div class="rca-player-detail">
                                <span class="rca-player">MS Dhoni</span>
                                <span class="rca-highlight-text">(C) &amp; (WK)</span>
                                <span class="rca-right rca-basic-text">Batsman</span>
                            </div>
                            <div class="rca-player-detail">
                                <span class="rca-player">Shikhar Dhawan</span>
                                <span class="rca-right rca-basic-text">Batsman</span>
                            </div>
                            <div class="rca-player-detail">
                                <span class="rca-player">Ajinkya Rahane</span>
                                <span class="rca-right rca-basic-text">Bowler</span>
                            </div>
                            <div class="rca-player-detail">
                                <span class="rca-player">Suresh Raina</span>
                                <span class="rca-right rca-basic-text">All rounder</span>
                            </div>
                        </div>
                        <div class="rca-batting-score">
                            <h3>Bench (9)</h3>
                            <div class="rca-player-detail">
                                <span class="rca-player">Rohit Sharma</span>
                                <span class="rca-highlight-text">(WK)</span>
                                <span class="rca-right rca-basic-text">Batsman</span>
                            </div>
                            <div class="rca-player-detail">
                                <span class="rca-player">Rohit Sharma</span>
                                <span class="rca-right rca-basic-text">Batsman</span>
                            </div>
                            <div class="rca-player-detail">
                                <span class="rca-player">Rohit Sharma</span>
                                <span class="rca-right rca-basic-text">Batsman</span>
                            </div>
                            <div class="rca-player-detail">
                                <span class="rca-player">Rohit Sharma</span>
                                <span class="rca-right rca-basic-text">Batsman</span>
                            </div>
                        </div>
                    </div>
                    <div id="tab-412" class="rca-tab-content rca-padding active">
                        <!-- <div class="rca-padding">
                          <div class="rca-switch filled">
                            <span class="active">Team X</span><span>Team Y</span>
                          </div>
                        </div> -->
                        <div class="rca-batting-score">
                            <h3>Team Y (11)</h3>
                            <div class="rca-player-detail">
                                <span class="rca-player">MS Dhoni</span>
                                <span class="rca-highlight-text">(C) &amp; (WK)</span>
                                <span class="rca-right rca-basic-text">Batsman</span>
                            </div>
                            <div class="rca-player-detail">
                                <span class="rca-player">Shikhar Dhawan</span>
                                <span class="rca-right rca-basic-text">Batsman</span>
                            </div>
                            <div class="rca-player-detail">
                                <span class="rca-player">Ajinkya Rahane</span>
                                <span class="rca-right rca-basic-text">Bowler</span>
                            </div>
                            <div class="rca-player-detail">
                                <span class="rca-player">Suresh Raina</span>
                                <span class="rca-right rca-basic-text">All rounder</span>
                            </div>
                        </div>
                        <div class="rca-batting-score">
                            <h3>Bench (9)</h3>
                            <div class="rca-player-detail">
                                <span class="rca-player">Rohit Sharma</span>
                                <span class="rca-highlight-text">(WK)</span>
                                <span class="rca-right rca-basic-text">Batsman</span>
                            </div>
                            <div class="rca-player-detail">
                                <span class="rca-player">Rohit Sharma</span>
                                <span class="rca-right rca-basic-text">Batsman</span>
                            </div>
                            <div class="rca-player-detail">
                                <span class="rca-player">Rohit Sharma</span>
                                <span class="rca-right rca-basic-text">Batsman</span>
                            </div>
                            <div class="rca-player-detail">
                                <span class="rca-player">Rohit Sharma</span>
                                <span class="rca-right rca-basic-text">Batsman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Test Innings Score Card-->
            <div class="rca-medium-widget rca-top-border">
                <ul class="rca-tab-list">
                    <li class="rca-tab-link active" data-tab="tab-31" onclick="showTab(this);">SCORECARD</li>
                    <li class="rca-tab-link" data-tab="tab-32" onclick="showTab(this);">SQUAD</li>
                </ul>
                <div id="tab-31" class="rca-tab-content rca-padding active">
                    <div class="rca-border-bottom rca-padding">
                        <div class="rca-switch rca-top-padding">
                            <span class="active">Team X 1st Innings</span><span>Team X 2nd Innings</span>
                        </div>
                        <div class="rca-switch rca-top-padding">
                            <span>Team Y 1st Innings</span><span>Team Y 2nd Innings</span>
                        </div>
                    </div>
                    <div class="rca-batting-score rca-padding">
                        <h3>Team X Batting: <strong> 92/2 in 8.5</strong></h3>
                        <div class="rca-row">
                            <div class="rca-header rca-table">
                                <div class="rca-col rca-player">
                                    Batsmen
                                </div>
                                <div class="rca-col">
                                    R
                                </div>
                                <div class="rca-col">
                                    4s
                                </div>
                                <div class="rca-col">
                                    6s
                                </div>
                                <div class="rca-col">
                                    SR
                                </div>
                            </div>
                        </div>
                        <div class="rca-row">
                            <div class="rca-table">
                                <div class="rca-col rca-player">
                                    Player x1*
                                    <p>bowled b JR Hazlewood</p>
                                </div>
                                <div class="rca-col">
                                    8 (7)
                                </div>
                                <div class="rca-col">
                                    0
                                </div>
                                <div class="rca-col">
                                    1
                                </div>
                                <div class="rca-col">
                                    114.29
                                </div>
                            </div>
                        </div>
                        <div class="rca-row rca-padding">
                            <span>Fours: <strong>18</strong></span>, <span>Sixes: <strong>8</strong></span>, <span>Extras: <strong>29</strong></span>
                        </div>
                    </div>
                    <div class="rca-bowling-score rca-padding">
                        <h3>Team X Bowling:</h3>
                        <div class="rca-row">
                            <div class="rca-header">
                                <div class="rca-col rca-player">
                                    Bowler
                                </div>
                                <div class="rca-col small">
                                    O
                                </div>
                                <div class="rca-col small">
                                    M
                                </div>
                                <div class="rca-col small">
                                    R
                                </div>
                                <div class="rca-col small">
                                    W
                                </div>
                                <div class="rca-col small">
                                    Econ
                                </div>
                                <div class="rca-col small">
                                    Extras
                                </div>
                            </div>
                        </div>
                        <div class="rca-row">
                            <div class="rca-table">
                                <div class="rca-col rca-player">
                                    Player Y
                                </div>
                                <div class="rca-col small">
                                    9
                                </div>
                                <div class="rca-col small">
                                    2
                                </div>
                                <div class="rca-col small">
                                    38
                                </div>
                                <div class="rca-col small">
                                    2
                                </div>
                                <div class="rca-col small">
                                    5.00
                                </div>
                                <div class="rca-col small">
                                    3
                                </div>
                            </div>
                        </div>
                        <div class="rca-row">
                            <div class="rca-table">
                                <div class="rca-col rca-player">
                                    Player Y
                                </div>
                                <div class="rca-col small">
                                    6
                                </div>
                                <div class="rca-col small">
                                    2
                                </div>
                                <div class="rca-col small">
                                    38
                                </div>
                                <div class="rca-col small">
                                    2
                                </div>
                                <div class="rca-col small">
                                    7.00
                                </div>
                                <div class="rca-col small">
                                    3
                                </div>
                            </div>
                        </div>
                        <div class="rca-row rca-padding">
                            <h3>Fall of Wicket:</h3>
                            <ol class="rca-wicket-falls">
                                <li>R Chandrika at 2 runs, in 1.3 over</li>
                                <li>R Chandrika at 20 runs, in 2.0 over</li>
                                <li>R Chandrika at 0 runs, in 3.5 over</li>
                                <li>R Chandrika at 99 runs, in 10.3 over</li>
                                <li>R Chandrika at 14 runs, in 13.1 over</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div id="tab-32" class="rca-tab-content rca-padding">
                    <div class="rca-padding">
                        <div class="rca-switch filled">
                            <span class="active">Team X</span><span>Team Y</span>
                        </div>
                    </div>
                    <div class="rca-batting-score rca-padding">
                        <h3>Team X (11)</h3>
                        <div class="rca-player-detail">
                            <span class="rca-player">MS Dhoni</span>
                            <span class="rca-highlight-text">(C) &amp; (WK)</span>
                            <span class="rca-right rca-basic-text">Batsman</span>
                        </div>
                        <div class="rca-player-detail">
                            <span class="rca-player">Shikhar Dhawan</span>
                            <span class="rca-right rca-basic-text">Batsman</span>
                        </div>
                        <div class="rca-player-detail">
                            <span class="rca-player">Ajinkya Rahane</span>
                            <span class="rca-right rca-basic-text">Bowler</span>
                        </div>
                        <div class="rca-player-detail">
                            <span class="rca-player">Suresh Raina</span>
                            <span class="rca-right rca-basic-text">All rounder</span>
                        </div>
                    </div>
                    <div class="rca-batting-score rca-padding">
                        <h3>Bench (9)</h3>
                        <div class="rca-player-detail">
                            <span class="rca-player">Rohit Sharma</span>
                            <span class="rca-highlight-text">(WK)</span>
                            <span class="rca-right rca-basic-text">Batsman</span>
                        </div>
                        <div class="rca-player-detail">
                            <span class="rca-player">Rohit Sharma</span>
                            <span class="rca-right rca-basic-text">Batsman</span>
                        </div>
                        <div class="rca-player-detail">
                            <span class="rca-player">Rohit Sharma</span>
                            <span class="rca-right rca-basic-text">Batsman</span>
                        </div>
                        <div class="rca-player-detail">
                            <span class="rca-player">Rohit Sharma</span>
                            <span class="rca-right rca-basic-text">Batsman</span>
                        </div>
                    </div>
                </div>
                <div class="rca-logo rca-powered">
                    <h2>
                        <a href="https://www.cricketapi.com/" target="_blank">
                  <span>
                    <img src="https://d2muumq9nnirye.cloudfront.net/cricketapi/images/api_logo.svg" style="width: 50px;">
                  </span>
                            <span><small>Powered By</small><br/><strong>CRICKET API</strong></span>
                        </a>
                    </h2>
                </div>
            </div>


        </div>
    </div>
</div>
<script>
    function showTab(event) {
        var sourceParent = event.parentElement.parentElement;
        var sourceChilds = sourceParent.getElementsByClassName("rca-tab-content");
        var sourceLinkParent = sourceParent.getElementsByClassName("rca-tab-link");
        for (var i=0; i < sourceChilds.length; i++) {
            sourceChilds.item(i).classList.remove("active");
        }
        for (var i=0; i < sourceLinkParent.length; i++) {
            sourceLinkParent.item(i).classList.remove("active");
        }
        var dataTab= event.getAttribute("data-tab");

        event.classList.add("active");
        document.getElementById(dataTab).className += ' active';
    }
</script>

</body>
</html>
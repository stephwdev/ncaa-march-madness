<link rel="stylesheet" href="css/tournament.css">
<?php include "functions.php"; ?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>

    <title>NCAA Tournament Bracket</title>
</head>
<body>
<header class="hero">
    <div class="hero-wrap">

        <h1 id="headline">2019 Tournament</h1>

    </div>
</header>


<section id="bracket">
    <div class="container">
        <div class="split split-one">
            <div class="round round-one current">
                <div class="round-details">Round 1<br/> </div>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y01', $db)?><span class="score">88</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y16', $db)?><span class="score">73</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y08', $db)?><span class="score">61</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y09', $db)?><span class="score">78</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y05', $db)?><span class="score">78</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y12', $db)?><span class="score">77</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y04', $db)?><span class="score">87</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y13', $db)?><span class="score">53</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y06', $db)?><span class="score">59</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y11', $db)?><span class="score">62</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y03', $db)?><span class="score">84</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y14', $db)?><span class="score">55</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y07', $db)?><span class="score">84</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y10', $db)?><span class="score">66</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y02', $db)?><span class="score">79</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y15', $db)?><span class="score">44</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z01', $db)?><span class="score">71</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z16', $db)?><span class="score">56</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z08', $db)?><span class="score">72</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z09', $db)?><span class="score">95</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z05', $db)?><span class="score">54</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z12', $db)?><span class="score">72</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z04', $db)?><span class="score">64</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z13', $db)?><span class="score">70</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z06', $db)?><span class="score">61</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z11', $db)?><span class="score">57</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z03', $db)?><span class="score">61</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z14', $db)?><span class="score">48</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z07', $db)?><span class="score">72</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z10', $db)?><span class="score">79</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z02', $db)?><span class="score">77</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z15', $db)?><span class="score">70</span></li>
                </ul>
            </div>  <!-- END ROUND ONE -->


            <div class="round round-two current">
                <div class="round-details">Round 2<br/></div>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y01', $db)?><span class="score">81</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y09', $db)?><span class="score">59</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y05', $db)?><span class="score">89</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y04', $db)?><span class="score">75</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y11', $db)?><span class="score">59</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y03', $db)?><span class="score">74</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y07', $db)?><span class="score">56</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y02', $db)?><span class="score">62</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z01', $db)?><span class="score">63</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z09', $db)?><span class="score">51</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z12', $db)?><span class="score">73</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z13', $db)?><span class="score">54</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z06', $db)?><span class="score">61</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z03', $db)?><span class="score">87</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z10', $db)?><span class="score">77</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z02', $db)?><span class="score">83</span></li>
                </ul>
            </div>  <!-- END ROUND TWO -->

            <div class="round round-three current">
                <div class="round-details">Round 3<br/></div>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y01', $db)?><span class="score">80</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y05', $db)?><span class="score">97</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y03', $db)?><span class="score">58</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y02', $db)?><span class="score">62</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z01', $db)?><span class="score">53</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z12', $db)?><span class="score">49</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z03', $db)?><span class="score">99</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z02', $db)?><span class="score">94</span></li>
                </ul>
            </div>  <!-- END ROUND THREE -->

            <div class="round round-four current">
                <div class="round-details">Round 4<br/></div>

                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Y05', $db)?><span class="score">77</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Y02', $db)?><span class="score">71</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'Z01', $db)?><span class="score">80</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z03', $db)?><span class="score">75</span></li>
                </ul>

            </div>  <!-- END ROUND THREE -->
        </div>

        <div class="champion current">
            <div class="semis-l">
                <div class="round-details">west semifinals <br/></div>
                <ul class ="matchup championship">
                    <li class="team team-top"><?php getName(2019, 'Y05', $db)?><span class="score">62</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'Z01', $db)?><span class="score">63</span></li>

                </ul>

            </div>
            <div class="final">
                <i class="fa fa-trophy"></i>
                <div class="round-details">championship <br/></div>
                <ul class ="matchup championship">
                    <li class="team team-top"><?php getName(2019, 'Z01', $db)?><span class="score">85</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X03', $db)?><span class="score">77</span></li>
                </ul>
            </div>
            <div class="semis-r">
                <div class="round-details">east semifinals <br/></div>
                <ul class ="matchup championship">
                    <li class="team team-top"><?php getName(2019, 'W02', $db)?><span class="score">51</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X03', $db)?><span class="score">61</span></li>

                </ul>
            </div>
        </div>


        <div class="split split-two">

            <div class="round round-four current">
                <div class="round-details">Round 4<br/></div>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W01', $db)?><span class="score">67</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W02', $db)?><span class="score">68</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X01', $db)?><span class="score">69</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X03', $db)?><span class="score">75</span></li>
                </ul>

            </div>  <!-- END ROUND THREE -->

            <div class="round round-three current">
                <div class="round-details">Round 3<br/></div>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W01', $db)?><span class="score">75</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W04', $db)?><span class="score">73</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W03', $db)?><span class="score">63</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W02', $db)?><span class="score">80</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X01', $db)?><span class="score">72</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X04', $db)?><span class="score">58</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X03', $db)?><span class="score">63</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X02', $db)?><span class="score">44</span></li>
                </ul>
            </div>  <!-- END ROUND THREE -->

            <div class="round round-two current">
                <div class="round-details">Round 2<br/></div>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W01', $db)?><span class="score">77</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W09', $db)?><span class="score">76</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W12', $db)?><span class="score">58</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W04', $db)?><span class="score">67</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W06', $db)?><span class="score">67</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W03', $db)?><span class="score">69</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W10', $db)?><span class="score">50</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W02', $db)?><span class="score">70</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X01', $db)?><span class="score">83</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X09', $db)?><span class="score">71</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X12', $db)?><span class="score">62</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X04', $db)?><span class="score">90</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X06', $db)?><span class="score">58</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X03', $db)?><span class="score">78</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X10', $db)?><span class="score">49</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X02', $db)?><span class="score">64</span></li>
                </ul>

            </div>  <!-- END ROUND TWO -->
            <div class="round round-one current">
                <div class="round-details">Round 1<br/></div>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W01', $db)?><span class="score">85</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W16a', $db)?><span class="score">62</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W08', $db)?><span class="score">58</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W09', $db)?><span class="score">73</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W05', $db)?><span class="score">76</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W12', $db)?><span class="score">80</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W04', $db)?><span class="score">66</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W13', $db)?><span class="score">52</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W06', $db)?><span class="score">79</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W11b', $db)?><span class="score">77</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W03', $db)?><span class="score">79</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W14', $db)?><span class="score">74</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W07', $db)?><span class="score">76</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W10', $db)?><span class="score">86</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'W02', $db)?><span class="score">76</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'W15', $db)?><span class="score">65</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X01', $db)?><span class="score">87</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X16a', $db)?><span class="score">49</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X08', $db)?><span class="score">69</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X09', $db)?><span class="score">78</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X05', $db)?><span class="score">64</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X12', $db)?><span class="score">83</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X04', $db)?><span class="score">76</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X13', $db)?><span class="score">69</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X06', $db)?><span class="score">91</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X11a', $db)?><span class="score">74</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X03', $db)?><span class="score">72</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X12', $db)?><span class="score">57</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X07', $db)?><span class="score">61</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X10', $db)?><span class="score">70</span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?php getName(2019, 'X02', $db)?><span class="score">74</span></li>
                    <li class="team team-bottom"><?php getName(2019, 'X15', $db)?><span class="score">55</span></li>
                </ul>
            </div>  <!-- END ROUND ONE -->
        </div>
    </div>
</section>
<section class="share">
    <div class="share-wrap">
        <a href="2015.php">2015</a>
        <a href="2016.php">2016</a>
        <a href="2017.php">2017</a>
        <a href="2018.php">2018</a>
    </div>
</section>
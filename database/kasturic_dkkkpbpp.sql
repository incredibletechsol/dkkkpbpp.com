DROP TABLE IF EXISTS tbl_admissions;

CREATE TABLE `tbl_admissions` (
  `candidate_id` int(20) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(50) NOT NULL,
  `candidate_email` varchar(50) NOT NULL,
  `candidate_mobileno` bigint(10) NOT NULL,
  `candidate_gender` varchar(6) NOT NULL,
  `candidate_dob` date NOT NULL,
  `admissionTo` varchar(20) NOT NULL,
  `status` varchar(6) NOT NULL DEFAULT 'R',
  PRIMARY KEY (`candidate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tbl_alumini;

CREATE TABLE `tbl_alumini` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `alumininame` varchar(100) NOT NULL,
  `aluminideptname` varchar(100) NOT NULL,
  `aluminiyearofpassing` varchar(4) NOT NULL,
  `aluminicurrentlyworkingin` varchar(100) NOT NULL,
  `aluminimobileno` varchar(12) NOT NULL,
  `aluminiemailId` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=176 DEFAULT CHARSET=latin1;

INSERT INTO tbl_alumini VALUES("11","Akshay Khomane ","Electrical Engineering","2014","TCFM ","7020267883","Akshaykhomane02@gmail.com");
INSERT INTO tbl_alumini VALUES("12","Vikas Suresh Todkar","Electrical Engineering","2014","Ismt ltd Baramati","7040884046","vikastodkar552@gmail.com");
INSERT INTO tbl_alumini VALUES("9","Siddharth Ashok Waghmare","Electrical Engineering","2018","Business","9834330535","Sidh.waghmare123@gmail.com");
INSERT INTO tbl_alumini VALUES("10","Akshay Khomane ","Electrical Engineering","2014","TCFM ","7020267883","Akshaykhomane02@gmail.com");
INSERT INTO tbl_alumini VALUES("13","Sachin Baburao Kutwal","Electrical Engineering","2014","Four seasons wines Ltd ","7709458655","sacinkutwal@gmail.com");
INSERT INTO tbl_alumini VALUES("14","Rutvik Dhananjay Patole ","Electrical Engineering","2019","Degree in electrical engineering ","9657418793","patolekrutvik@gmail.com. ");
INSERT INTO tbl_alumini VALUES("15","Rutvik Dhananjay Patole ","Electrical Engineering","2019","Degree in electrical engineering ","9657418793","patolekrutvik@gmail.com. ");
INSERT INTO tbl_alumini VALUES("16","Vijay Shivaji Kamble","Electrical Engineering","2019","LIC OF INDIA","8888717918/9","kamblevs5656@gmail.com");
INSERT INTO tbl_alumini VALUES("17","Nitesh Nakul Nadgouda","Electrical Engineering","2017","PIAGGIO ","7758982949","niteshnadgouda@gmail.com");
INSERT INTO tbl_alumini VALUES("18","Mane pragati vilas","Electrical Engineering","2019","Degree ","7498029828","Pragatimane28@gmail.com");
INSERT INTO tbl_alumini VALUES("19","Vishal Pandit","Electrical Engineering","2018","Ilabz Technology llp","7038162114","Vishalpandit813@gmail.com");
INSERT INTO tbl_alumini VALUES("20","Sunil Ramchandra Harjit ","Electrical Engineering","2014","Instrumentation and systems","7387778083","harjitsunil11@gmail.com ");
INSERT INTO tbl_alumini VALUES("21","Viraj Sushilsinh Dhumal ","Civil Engineering","2018","College","9765804093 ","virajdhumal123@gmail.com ");
INSERT INTO tbl_alumini VALUES("22","Laxman Balaso Sathe ","Civil Engineering","2014","Engineer @  ZP Satara","8605588001","sathelucky09@gmail.com");
INSERT INTO tbl_alumini VALUES("23","Sani Vasant Bhosale","Civil Engineering","2015","Site Engineer","9975455062","bhosalesunyy009@gmail.com");
INSERT INTO tbl_alumini VALUES("24","Shubham A Pawar","Civil Engineering","2020","Business","9763866886","Pwrshbm007@gmail.com");
INSERT INTO tbl_alumini VALUES("25","Navnath Sarjerao Sul","Civil Engineering","2015","Pune","7757973963","navnathsul2912@gmail.com");
INSERT INTO tbl_alumini VALUES("26","Navnath Sarjerao Sul","Civil Engineering","2015","Pune","7757973963","navnathsul2912@gmail.com");
INSERT INTO tbl_alumini VALUES("27","Hande shrikant bhagwat","Electrical Engineering","2017","Vespa ","7350073943","shrihande96@gmail.com");
INSERT INTO tbl_alumini VALUES("28","Lokhande Swati dadaso","Electronics and Telecommunication","2015","Hdfc","8956348439","Swatidlokhande22@gimail.com");
INSERT INTO tbl_alumini VALUES("29","Vahid Mulani","Electrical Engineering","2018","No","9503662328","vahidmulani@gmail.com");
INSERT INTO tbl_alumini VALUES("30","Kale Mayur Hemant","Civil Engineering","2016","Student","9657779797","mayurkale002@gmail.com");
INSERT INTO tbl_alumini VALUES("31","Prakash popat borkar","Civil Engineering","2015","Pune","7038017311","Prakashborkar18@gmail.com");
INSERT INTO tbl_alumini VALUES("32","Baban Sitaram Bandagar","Civil Engineering","2019","MS.Right Construction","9527785084","babanbandagar595@gmail.com");
INSERT INTO tbl_alumini VALUES("33","Priyanka dnyaneshwar naikanware","Electrical Engineering","2019","Admitted in degree of electrical engineering","9307998850","naikanwarepriyanka@gmail.com");
INSERT INTO tbl_alumini VALUES("34","Amit rupanwar ","Civil Engineering","2013","Tulip properties ","9503295183","rupanwar.amit@gmail.com");
INSERT INTO tbl_alumini VALUES("35","Kiran abaji ghogare","Civil Engineering","2014","Y v mane construction Pvt Ltd","7387697069","kiranghogare69@gmail.com");
INSERT INTO tbl_alumini VALUES("36","Prakash ashok Sonwalkar ","Civil Engineering","2014","Utkarsh Pvt. Ltd. Baramati.","9561838351","prakashsonwalkar123@gmail.com");
INSERT INTO tbl_alumini VALUES("37","Prashant Patil","Civil Engineering","2014","Sangli","8208936717","Patil.prashant.a007@gmail.com");
INSERT INTO tbl_alumini VALUES("38","Solankar Aniket ","Electrical Engineering","2014","ValueMomentum(CBRE),Pune","8379808041","aniket.solankar@gmail.com");
INSERT INTO tbl_alumini VALUES("39","Suraj Mahadev more ","Civil Engineering","2017","2year ","9834848699","surajmore382@gmail.com");
INSERT INTO tbl_alumini VALUES("40","Suraj Mahadev more ","Civil Engineering","2017","2year ","9834848699","surajmore382@gmail.com");
INSERT INTO tbl_alumini VALUES("41","Tushar Bhosale","Civil Engineering","2016","Pritam Group","+91960412146","btushar092@gmail.com");
INSERT INTO tbl_alumini VALUES("42","Sagar madhukar kale","Civil Engineering","2012","Baramati","7387553500","Sagarkale3600@gmail.com");
INSERT INTO tbl_alumini VALUES("43","Snehal Dadasaheb Gaikwad","Electrical Engineering","2013","BPP KALAMB","7387307448","gsnehal2899@gmail.com");
INSERT INTO tbl_alumini VALUES("44","Snehal Dadasaheb Gaikwad","Electrical Engineering","2013","BPP KALAMB","7387307448","gsnehal2899@gmail.com");
INSERT INTO tbl_alumini VALUES("45","Ranjit Ramchandra Yamgar","Electrical Engineering","2018","Vssskl","9765621083","ranjityamgar4311@gmail.com");
INSERT INTO tbl_alumini VALUES("46","Pramod Bapu Sanap ","Electrical Engineering","2016","Pune","7775898632","Pramodsanap5@gmail.com ");
INSERT INTO tbl_alumini VALUES("47","Pramod Bapu Sanap ","Electrical Engineering","2016","Pune","7775898632","Pramodsanap5@gmail.com ");
INSERT INTO tbl_alumini VALUES("48","Mahesh Satyawan Shende","Civil Engineering","2016","Government Contractor","9665151354","shendemahesh55@gmail.com");
INSERT INTO tbl_alumini VALUES("49","Kirankumar Balasaheb Wayse","Civil Engineering","2015","Business","7744077107","kiranwayse7107@gmail.com");
INSERT INTO tbl_alumini VALUES("50","Kanchan Lathor","Electronics and Telecommunication","2013","AstraZeneca","9975540722","kanchanlathor05@gmail.com");
INSERT INTO tbl_alumini VALUES("51","Kirankumar Balasaheb Wayse","Civil Engineering","2015","Business","7744077107","kiranwayse7107@gmail.com");
INSERT INTO tbl_alumini VALUES("52","Kirankumar Balasaheb Wayse","Civil Engineering","2015","Business","7744077107","kiranwayse7107@gmail.com");
INSERT INTO tbl_alumini VALUES("53","Makrand jadhav","Electronics and Telecommunication","2012","Director of shiv network","9421215034","Jadhavmakrand996@gmail.com");
INSERT INTO tbl_alumini VALUES("54","Sagar Balaso Malekar","Electronics and Telecommunication","2013","Self Employee","9763334022","sagarmalekar4022@gmail.com");
INSERT INTO tbl_alumini VALUES("56","Nilesh Dattatray Shegar","Electronics and Telecommunication","2013","Renu Electronics Pvt Ltd","9975474841","shegarnilesh12@gmail.com");
INSERT INTO tbl_alumini VALUES("57","PRASHANT SANJAY  RASKAR","Electronics and Telecommunication","2013","PARAMOUNT POLYMERS PRIVATE LIMITED","8308557668","prashantraskar.3242@gmail.com");
INSERT INTO tbl_alumini VALUES("58","MONALI JITENDRA GORE","Electronics and Telecommunication","2015","DNYANWARDHINI VIDHYALAYA & JUNIOR COLLAGE CHAKAN ","9075499336","monaliraskar.3242@gmail.com");
INSERT INTO tbl_alumini VALUES("59","Kiran ashok narute","Electrical Engineering","2016","Home","9763282480","narutekiran37@gmail.com");
INSERT INTO tbl_alumini VALUES("60","Sagar Sambhaji Jadhav","Civil Engineering","2018","As a student of Civil Engineering Technology in Shivaji University, Kolhapuri","9552170895","sagarjadhav071999@gmail.com");
INSERT INTO tbl_alumini VALUES("61","Pradeep mahadev ovhal","Electronics and Telecommunication","2016","Ismt baramati","9373626326","p9970197538@gmail.com");
INSERT INTO tbl_alumini VALUES("62","Pradeep mahadev ovhal","Electronics and Telecommunication","2016","Ismt baramati","9373626326","p9970197538@gmail.com");
INSERT INTO tbl_alumini VALUES("63","Mahesh Dattatray Nalawade","Civil Engineering","2018","College Student","9370426048/9","maheshnalawade9554@gmail.com");
INSERT INTO tbl_alumini VALUES("64","Nikhil Nitin Mane","Mechanical Engineering","2017","Studying in JSPM NTC","8788112153","nikhilmane9997@gmail.com");
INSERT INTO tbl_alumini VALUES("65","Swapnil Kantilal Khomane ","Mechanical Engineering","2018","Degree ","7769024669","swapnilkhomane1234@gmail.com");
INSERT INTO tbl_alumini VALUES("66","Hanumant Sarjerao Bhale","Mechanical Engineering","2018","KSPG Autoumotive India Pvt. Ltd. Takave Pune.","70 5712 1001","hanumantbhale1@gmail.com");
INSERT INTO tbl_alumini VALUES("67","Shubham sonawane","Mechanical Engineering","2016","MBA STUDENT","9527181279","Shubhsonawane9@gmail.com");
INSERT INTO tbl_alumini VALUES("68","Sachin Bhagwat Bhale","Mechanical Engineering","2016","Maharashtra state electricity board chakan","9890961435","sachinbhaleb@gmail.com");
INSERT INTO tbl_alumini VALUES("69","Vaibhav Madan Waghmode","Mechanical Engineering","2018","Skf Bearing","7620029328","vmwaghmode215@gmail.com");
INSERT INTO tbl_alumini VALUES("70","Ajay Dattatray Konge","Mechanical Engineering","2017","SKF India Ltd Pune.","7350171657 &","ajaykonge131097@gmail.com");
INSERT INTO tbl_alumini VALUES("71","Vikas  balaso pandhare","Mechanical Engineering","2018","WIL(walchadnagar)","9130815004","vikaspandhare143@gmail.com");
INSERT INTO tbl_alumini VALUES("72","Pritesh Baburao Kashid ","Electrical Engineering","2015","Preparation of Competitive Exam","8552801416","priteshkashid21@gmail.com ");
INSERT INTO tbl_alumini VALUES("73","Sagar Ankush koli","Mechanical Engineering","2015","Piaggio  pvt  ltd.. baramati","9561949512","Kolisagar009@gmail.com");
INSERT INTO tbl_alumini VALUES("74","Pol rajkumar jaywant ","Mechanical Engineering","2019","TATA MOTORS","9503414254","polrajkumar5@gmail.com");
INSERT INTO tbl_alumini VALUES("75","Rushikesh jadhav","Mechanical Engineering","2017","Tata motors","7219725704","rushikeshjadhav143.rj@gmail.com");
INSERT INTO tbl_alumini VALUES("76","Gaurav dnyaneshwar bhoite ","Mechanical Engineering","2020","Bharat forge baramati ","9762938798","gauravbhoite555@gmail.com ");
INSERT INTO tbl_alumini VALUES("77","Popat Vilas Kale","Mechanical Engineering","2016","Shandong Heavy Industry (I) Pvt.Ltd.Pune","7758865819 /","popatvkale@gmail.com");
INSERT INTO tbl_alumini VALUES("78","Singh Chandankumar Sivasare","Mechanical Engineering","2017","Walchandnagar Industries Ltd (will) ","8308552602","cks561996@gmail.com");
INSERT INTO tbl_alumini VALUES("79","Ranjit Hanumant Rupnawar","Mechanical Engineering","2015","Tata Motors LTD Pune.","8380818958","ranjitrupnawar1994@gmail.com");
INSERT INTO tbl_alumini VALUES("80","Deepak Surendra Deshpande","Mechanical Engineering","2017","Cummims Technologies India Pvt.Ltd.","9665290038","deepak.deshpande56@gmail.com");
INSERT INTO tbl_alumini VALUES("81","Phule Sandip Mahadev","Mechanical Engineering","2018","SKF India Ltd. Chinchwad Pune","9561886916","sandipphule36@gmail.com");
INSERT INTO tbl_alumini VALUES("82","Vaibhav Ravindra Pawar","Mechanical Engineering","2016","Tata motors ltd.","7768089317","vaibhav17p@gmail.com");
INSERT INTO tbl_alumini VALUES("83","Ranjeet Ghodake","Mechanical Engineering","2017","Business","9175607095","ranjeetghodake2929@gmail.com");
INSERT INTO tbl_alumini VALUES("84","Nandlal bihari","Mechanical Engineering","2003","Naka","7335323412","nandlalb123@gmail.com");
INSERT INTO tbl_alumini VALUES("85","Raj Sunil Bhosale","Mechanical Engineering","2017","keihin fie pvt Ltd chakan,Maharashtra","7057885284","rajbhosale2015@gmail.com");
INSERT INTO tbl_alumini VALUES("86","Surendra  M Magar","Mechanical Engineering","2013","Own business  like commercial and industrial fabrication work at Baramati MIDC .","9890706861","surendramagar96@gmail.com");
INSERT INTO tbl_alumini VALUES("87","Krishna Tavare ","Mechanical Engineering","2017","Kirloskar oil engines Kagal, Kolhapur","8600442208","tavarekrishna@gmail.com");
INSERT INTO tbl_alumini VALUES("88","KUMBHARRAJE GURUNATH SIDDHANATH ","Mechanical Engineering","2017","Own Buisness","08698656849","gurunathk25@gmail.com");
INSERT INTO tbl_alumini VALUES("89","Krushnarao Hanumant Madane","Mechanical Engineering","wint","Bharat Forge, Baramati","8381062334","krushnaraomadane.2829@ gmail.com");
INSERT INTO tbl_alumini VALUES("90","Ranjeet Madhukar Todkar","Mechanical Engineering","2017","GOVERNMENT COLLEGE OF ENGINEERING AND RESEARCH CENTRE MANCHAR","9921495065","ranjeettodkar17@gmail.com");
INSERT INTO tbl_alumini VALUES("91","Ranjit Mahadeo Sonawane","Mechanical Engineering","2019","Piaggio Vehicles Baramati","9049296328","ranjitsonawane375@gmail.com");
INSERT INTO tbl_alumini VALUES("92","Avinash Somnath Deokate","Mechanical Engineering","2020","No","9527900591","avi9527900591@gmail.com");
INSERT INTO tbl_alumini VALUES("93","Swapnil shinde","Civil Engineering","2014","Baramati","9762541147","Swapnilshinde749@Gmail. Com");
INSERT INTO tbl_alumini VALUES("94","Vaibhav Sanjay pawar","Mechanical Engineering","2019","John Deere India private limited,sanswadi","7620630527","vaibhavpawar8888.vp@gmail.com");
INSERT INTO tbl_alumini VALUES("95","Sagar khemchand waghela","Mechanical Engineering","2017","ROBOTOTECH ENGINEERING ","8308887525","sagarwaghela4195@gmail.com");
INSERT INTO tbl_alumini VALUES("96","Rohit vijay khandekar","Civil Engineering","2014","Hindusamrat balasaheb thakare mahamarg,aurangabad.","9309105509","khandekarr4@gmail.com");
INSERT INTO tbl_alumini VALUES("97","SWAPNIL ARUN KOKARE","Mechanical Engineering","2016","SHREE SWAMI SAMARTH PACKAGING MACHINES. DIGHI","8600964056","swpnlkokare@gmail.com");
INSERT INTO tbl_alumini VALUES("98","Pratik prakash karanjkar","Mechanical Engineering","2018","Walchandnagar industries ltd","8669894242","pratikkaranjkar8@gmail.com");
INSERT INTO tbl_alumini VALUES("99","shubham Dhawade","Mechanical Engineering","2017","SKF bearings pune","9763548580 ","Shubhamdhavade1998@gmail.com");
INSERT INTO tbl_alumini VALUES("100","shubham Dhawade","Mechanical Engineering","2017","SKF bearings pune","9763548580 ","Shubhamdhavade1998@gmail.com");
INSERT INTO tbl_alumini VALUES("101","Agam Vaibhav dattatraya","Mechanical Engineering","2017","Business ","8380823795","agamvaibhav146@gmail.com");
INSERT INTO tbl_alumini VALUES("102","Vasav sonali Dinkar ","Mechanical Engineering","2019","Employee in Tata cumminc private Ltd phaltan ","8551858130","Sonalivasav1@gmail.com ");
INSERT INTO tbl_alumini VALUES("103","Sonali Dinkar Vasav ","Mechanical Engineering","2019","Work in Tata Cummins privet Ltd phaltan ","8551858130","Sonalivasav1@gmail.com ");
INSERT INTO tbl_alumini VALUES("104","Jadhav Suyash Shivaji","Mechanical Engineering","2019","Cummins India Pvt ltd","7972145645","suyashjadhav96.sj@gmail.com");
INSERT INTO tbl_alumini VALUES("105","Akshay Dasharath somase","Mechanical Engineering","2019","Tontech engg pvt.ltd ","8208181798","somaseakshay10@gmail.com ");
INSERT INTO tbl_alumini VALUES("106","Akash Appaso Khandagale","Mechanical Engineering","2016","Softflame Solutions Pvt.Ltd(IT)","9960750599","akashkhandagale28@gmail.com");
INSERT INTO tbl_alumini VALUES("107","Ajay dattatraya kharat ","Electrical Engineering","2014","Thyssenkrupp elevator india India pvt ltd","7709098472","ajaykharat777@gmail.com ");
INSERT INTO tbl_alumini VALUES("108","Nighol Shubham Vijay ","Mechanical Engineering","2017","Piaggio Vehicles Pvt. Ltd. Baramati ","9595593727","shubhamnighol@gmail.com");
INSERT INTO tbl_alumini VALUES("109","Chetan satywan kale","Mechanical Engineering","2017","Piaggio vehicle Pvt Ltd Baramati","9309990696","chetankale0099@gmail.com");
INSERT INTO tbl_alumini VALUES("110","Suraj Bhagwat Narute","Mechanical Engineering","2018","Bharat Forge Limited, Baramati","8308381871","surajpatil8489@gmail.com");
INSERT INTO tbl_alumini VALUES("111","Ganesh Govind Dhaygude","Civil Engineering","2015","Tata motors pune CvBu plant","7083742199","ganeshdhaygude111@gmail.com");
INSERT INTO tbl_alumini VALUES("112","Ranjeet khandagle","Mechanical Engineering","2018","Nira-Bhima S.S.K. shahajinagar tal.-indapur dist.-pune","8483868965","ranjeet105036@gmail.com");
INSERT INTO tbl_alumini VALUES("113","Ranjeet khandagle","Mechanical Engineering","2018","Nira-Bhima S.S.K. shahajinagar tal.-indapur dist.-pune","8483868965","ranjeet105036@gmail.com");
INSERT INTO tbl_alumini VALUES("114","Vishal Satyawan Raut","Mechanical Engineering","2019","Bharat forge mundhwa ","9096488947","Vishalraut646@gmail.com ");
INSERT INTO tbl_alumini VALUES("115","Akshay gore","Mechanical Engineering","2019","No","8600871054","Akshaygore68475@gmail . Com");
INSERT INTO tbl_alumini VALUES("116","Rahul Shivaji Dadas","Electrical Engineering","2018","Student","9765073442","rahul.dadas555@gmail.com");
INSERT INTO tbl_alumini VALUES("117","Harshad sable","Mechanical Engineering","2015","Suma soft pvt ltd","9689578163","harshadsable1996@gmail.com");
INSERT INTO tbl_alumini VALUES("118","Avadhut Maruti Malawadkar","Mechanical Engineering","2017","Hyundai Construction & Equipment pvt ltd","9730371994","avadhutm1995@gmail.com");
INSERT INTO tbl_alumini VALUES("119","Avadhut Maruti Malawadkar","Mechanical Engineering","2017","Hyundai Construction & Equipment pvt ltd","9730371994","avadhutm1995@gmail.com");
INSERT INTO tbl_alumini VALUES("120","Nikhil Narayan lathor","Electrical Engineering","2018","Education","9970118673","nikhillathor@gmail.com");
INSERT INTO tbl_alumini VALUES("121","Ganesh Jadhav","Mechanical Engineering","2015","Pune","9421491349","ganeshjadhav0020@gmail.com");
INSERT INTO tbl_alumini VALUES("122","Gaikwad Tejsinh Jayajirao ","Mechanical Engineering","2015","Bharat forge","9890893809","tejasgaikwad553@gmail.com");
INSERT INTO tbl_alumini VALUES("123","Abhiman Mohan shelake","Mechanical Engineering","2015","Mahindra and Mahindra as a design Engineer","9922632341","abhimans.ress@gmail.com");
INSERT INTO tbl_alumini VALUES("124","Holkar Akshay vitthal ","Mechanical Engineering","2016","Not working still studying","7350337287","17akashay.holkar@gmail.com");
INSERT INTO tbl_alumini VALUES("125","Dadasaheb Bharat Dhage","Mechanical Engineering","2019","Not work","7972274003","dadadhage2015@gmail.com");
INSERT INTO tbl_alumini VALUES("126","Vinayak Harishchandra Kale","Mechanical Engineering","2017","Walchand industries,walchandnagar.","9561732203","kalevinayak702@gmail.com");
INSERT INTO tbl_alumini VALUES("127","Ganesh Gokul Dhaigude ","Electrical Engineering","2013","Mahindra Rise ","7350542464","ganeshdhaigude222@gmail.com ");
INSERT INTO tbl_alumini VALUES("128","Ganesh Gokul Dhaigude ","Electrical Engineering","2014","Mahindra Rise ","7350542464","ganeshdhaigude222@gmail.com ");
INSERT INTO tbl_alumini VALUES("129","AShish Ranmode","Mechanical Engineering","Appe","-","7035150404","ranmodeashish1998@gmail.com");
INSERT INTO tbl_alumini VALUES("130","Kiran Appaso Nalawade","Mechanical Engineering","2015","Tata Auto components systems Pvt. Ltd. Hinjewadi pune","9881188041","kirannalawade89@gmail.com");
INSERT INTO tbl_alumini VALUES("131","Malekar Abhijit Vitthal","Mechanical Engineering","2019","MPSC Study ( AMVI)","9730708221 ","abhijitmalekar96@gmail.com ");
INSERT INTO tbl_alumini VALUES("132","Malekar Abhijit Vitthal","Mechanical Engineering","2019","MPSC Study ( AMVI)","9730708221 ","abhijitmalekar96@gmail.com ");
INSERT INTO tbl_alumini VALUES("133","Prasad Anil Dabhade","Mechanical Engineering","2019","Advik Hi tech Pvt.ltd","9860095571","prasaddabhade9812@gmail.com");
INSERT INTO tbl_alumini VALUES("134","Dnyaneshwar karche","Mechanical Engineering","2019","Bharat forge Mundhwa ","7378583576 ","Maulikarche2125@gmail.com ");
INSERT INTO tbl_alumini VALUES("135","Shubham shankar jamdade","Mechanical Engineering","2017","Jspm ntc,pune ","7057173000","shubhamjam35@gmail.com");
INSERT INTO tbl_alumini VALUES("136","Komal Vilas Saste","Electrical Engineering","2018","Student","9834988332","komalsaste97@gmail.com");
INSERT INTO tbl_alumini VALUES("137","Suraj Ankush Raskar","Mechanical Engineering","2018","Sansera engineering pune","8805744339","saraskar3@gmail.com");
INSERT INTO tbl_alumini VALUES("138","Vishal vinayak Shinde ","Civil Engineering","Wint","Self business ","9834105640","vishalshinde4108@gmail.com");
INSERT INTO tbl_alumini VALUES("139","Akshay shinde","Electrical Engineering","2018","Electric work","9860133235","akshayrt01@gmail.com");
INSERT INTO tbl_alumini VALUES("140","Vishal vinayak Shinde ","Civil Engineering","Wint","Self business ","9834105640","vishalshinde4108@gmail.com");
INSERT INTO tbl_alumini VALUES("141","Amit Mahanandkumar Joshi","Civil Engineering","2014","Raj infrastructure development India pvt Ltd Pune","9860665099","amitjoshi0101@gmail.com");
INSERT INTO tbl_alumini VALUES("142","Amit Mahanandkumar Joshi","Civil Engineering","2014","Raj infrastructure development India pvt Ltd Pune","9860665099","amitjoshi0101@gmail.com");
INSERT INTO tbl_alumini VALUES("143","Pravin kumar Jadhav","Electrical Engineering","2014","Mumbai Metro","9527629835","Pravinjadhav016@gmail.com");
INSERT INTO tbl_alumini VALUES("144","sagar kadam","Mechanical Engineering","2014","Mpsc","9096188477","Sagar.kadam200@gmail.com");
INSERT INTO tbl_alumini VALUES("145","Chavan mahesh vinayak","Automobile Engineering","2014","Walchand industry limited walchandnagar","8459090826","mvchavan01@gmail.com");
INSERT INTO tbl_alumini VALUES("146","AJIT BHARAT GAIKWAD","Mechanical Engineering","2014","Mahindra. And Mahindra","9960223356","ajitbg1993@gmail.com");
INSERT INTO tbl_alumini VALUES("147","Imran. Khatal","Mechanical Engineering","2014","In Walchandnagar industries Ltd walchandnagar ","9075667000","khatal.imran51@gmail.com");
INSERT INTO tbl_alumini VALUES("148","Vinayak Anandrao More","Mechanical Engineering","2014","Cummins Technologies India Limited,Phaltan","9096117025","morevinayak21@gmail.com");
INSERT INTO tbl_alumini VALUES("149","Deepak Bhagwat Shinde","Mechanical Engineering","2014","Farmer","9970914260","deepakshinde9100@gmail.com");
INSERT INTO tbl_alumini VALUES("150","Sagar Arjun Nevase","Mechanical Engineering","2017","Sb patil clg of engineering","9923141005","sagarnevase786@gmail.com");
INSERT INTO tbl_alumini VALUES("151","Rupesh Dnyandev kumbhar","Mechanical Engineering","2019","-","9970401894","rupeshdk7006@gmail.com");
INSERT INTO tbl_alumini VALUES("152","Audumbar Ajinath Tarale","Electrical Engineering","2016","Maharashtra Wireless Police.","9923875255","rk.audut.tarale@gmail.com");
INSERT INTO tbl_alumini VALUES("153","Audumbar Ajinath Tarale","Mechanical Engineering","2016","Maharashtra Wireless Police.","9923875255","rk.audut.tarale@gmail.com");
INSERT INTO tbl_alumini VALUES("154","Audumbar Ajinath Tarale","Electrical Engineering","2016","Maharashtra Wireless Police.","9923875255","rk.audut.tarale@gmail.com");
INSERT INTO tbl_alumini VALUES("155","Rohit rajendra sapkal","Electronics and Telecommunication","2014","No","9767672101","Sapkalrohit76@gmail.com");
INSERT INTO tbl_alumini VALUES("156","Sachin Sopan Shinde ","Electronics and Telecommunication","2016","MSEDCL ","9545959871 ","Shindesachin9889@gmail.com ");
INSERT INTO tbl_alumini VALUES("157","Kajal Gunwant Rupnawar","Electronics and Telecommunication","2016","Studying","7028835218","kajalrupnwar1122@gmail.com");
INSERT INTO tbl_alumini VALUES("158","Kajal Gunwant Rupnawar","Electronics and Telecommunication","2016","Studying","7028835218","kajalrupnwar1122@gmail.com");
INSERT INTO tbl_alumini VALUES("159","Prajakta","Electronics and Telecommunication","2014","South Korea ","01050578680","pawarsprajakta@gmail.com");
INSERT INTO tbl_alumini VALUES("160","Ashwinkumar Yadav","Electrical Engineering","2013","Hager Electro Pvt Ltd, Pune.","08796865533","ashwinyadav3@gmail.com");
INSERT INTO tbl_alumini VALUES("161","Sagar Anjikhane ","Civil Engineering","2017","Triveni Construction  (solapur)","9665329173","Sanjikhane3@gmail.com ");
INSERT INTO tbl_alumini VALUES("162","AMIT JANARDAN KADAM","Civil Engineering","2014","ASTUTE INFRASTRUCTURE PVT LTD","9763682236","amitkadam303@gmail.com");
INSERT INTO tbl_alumini VALUES("163","Kishor Navnath Devkate","Mechanical Engineering","2015","Bharat forge Barsmati","8830277024","devkatekishor555@gmail.com");
INSERT INTO tbl_alumini VALUES("164","Kishor Navnath Devkate","Mechanical Engineering","2015","Bharat forge Barsmati","8830277024","devkatekishor555@gmail.com");
INSERT INTO tbl_alumini VALUES("165","Salmankhan pathan","Electronics and Telecommunication","2015","Marketing","9765986545","Salman. Pathan4304@gmail.com");
INSERT INTO tbl_alumini VALUES("166","Sagar Bansode","Mechanical Engineering","2017","Last year mechanical engineering","9503937787","sagarbansode2861@gmail.com");
INSERT INTO tbl_alumini VALUES("167","Pravin kumar Jadhav","Electrical Engineering","2014","Mumbai Metro","9527629835","Pravinjadhav016@gmail.com");
INSERT INTO tbl_alumini VALUES("168","Saloni  Dilip Nale","Civil Engineering","2019","study  in  graduation ","8530719265","nalesaloni@Gmail. com");
INSERT INTO tbl_alumini VALUES("169","Khule abhijit vasant","Electronics and Telecommunication","2015","Baramati","8605445582","abhijitkhule9226@gmail.com");
INSERT INTO tbl_alumini VALUES("170","AMOL SHARAD SARWADE","Mechanical Engineering","2019","Sigma technologies","9730420489","amolsarwade24@gmail.com");
INSERT INTO tbl_alumini VALUES("171","RAJU SHINDE","Electrical Engineering","2014","ONGC","7304985963","shinderaju416@gmail.com");
INSERT INTO tbl_alumini VALUES("172","Kiran balaso sawant","Mechanical Engineering","2017","Pune","8796798485","Kiransawant1215@gmail.com");
INSERT INTO tbl_alumini VALUES("174","Jadhav kalpesh laxman","Automobile Engineering","2017","Student","9172144471","kalpeshjadhav261@gmail.com");
INSERT INTO tbl_alumini VALUES("175","Divakar Uttam Chava ","Mechanical Engineering","2014","Govt","7028818185","chavandivakar78@gmail.com");



DROP TABLE IF EXISTS tbl_documents;

CREATE TABLE `tbl_documents` (
  `docid` int(10) NOT NULL AUTO_INCREMENT,
  `category` text NOT NULL,
  `description` text NOT NULL,
  `filename` text NOT NULL,
  PRIMARY KEY (`docid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO tbl_documents VALUES("5","General","Brochure","dkkpkp_broucher.pdf");



DROP TABLE IF EXISTS tbl_enquiry;

CREATE TABLE `tbl_enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




DROP TABLE IF EXISTS tbl_faculty;

CREATE TABLE `tbl_faculty` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `deptname` text NOT NULL,
  `designation` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` int(2) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=147 DEFAULT CHARSET=latin1;

INSERT INTO tbl_faculty VALUES("69","Teaching","Mr.Bondre Atul Vishnu","General Science and Humanities","Lecturer ","M.A(English)","12","Mr.Bondre Atul Vishnu.jpg");
INSERT INTO tbl_faculty VALUES("68","Teaching","Mr.Khartode Vikas Motiram","General Science and Humanities","HOD","B.E Mech","13","Mr.Khartode Vikas Motiram.jpeg");
INSERT INTO tbl_faculty VALUES("67","Non-Teaching","Mr.Kadam Shekhar Kisan","Mechanical Engineering","Workshop Insteructor","I.T.I,NCTVT(Welder) DME","6","Mr.Kadam Shekhar Kisan.jpg");
INSERT INTO tbl_faculty VALUES("66","Non-Teaching","Mr.Nimbalkar Ravindra Fattesing","Mechanical Engineering","Workshop Insteructor","I.T.I,NCTVT(Fiter),DCE","8","Mr.Nimbalkar Ravindra Fattesing.jpg");
INSERT INTO tbl_faculty VALUES("137","Teaching","Mr.Bhagwatagite U.A","Mechanical Engineering","Lecturer","B.E ,MBA","4","Mr.Bhagwatagite U.A.jpg");
INSERT INTO tbl_faculty VALUES("63","Teaching","Mr.Kalsait Dhananjay Anil","Mechanical Engineering","Lecturer ","B.E","2","Mr.Kalsait Dhananjay Anil.jpg");
INSERT INTO tbl_faculty VALUES("138","Teaching","Mr.Bagnawar O A","Mechanical Engineering","Lecturer","B.E Mech","1","Mr.Bagnawar O A.jpg");
INSERT INTO tbl_faculty VALUES("54","Teaching","Mr.Thombare Nagesh Mahadev","Civil Engineering","Principal","M.sc BE.Civil","14","Mr.Tombare Nagesh .jpg");
INSERT INTO tbl_faculty VALUES("57","Teaching","Mr.Chavan Uday Jayshing","Mechanical Engineering","HOD","M.E","11","Mr.Chavan Uday Jayshing.jpg");
INSERT INTO tbl_faculty VALUES("58","Teaching","Mr.Kokare Amol Yashwant","Mechanical Engineering","Lecturer  Tpo","ME ","10","Mr.Kokare Amol Dattatraya .JPG");
INSERT INTO tbl_faculty VALUES("133","Teaching","Mr.Bhosale S.S","General Science and Humanities","Lecturer","M.A (Eng)","5","Mr.Bhosale S.S.jpg");
INSERT INTO tbl_faculty VALUES("70","Teaching","Ms. Sabale D. M","General Science and Humanities","Lecturer ","Msc(Math)","2","Ms. Sabale D. M.jpg");
INSERT INTO tbl_faculty VALUES("71","Teaching","Ms. Mohite R. A.","General Science and Humanities","Lecturer ","Msc(Chemistry)","2","Ms. Mohite R. A..jpg");
INSERT INTO tbl_faculty VALUES("72","Non-Teaching","Mr.Adaling Vikas Dnyandeo","General Science and Humanities","Lab Asst.Physics","Bsc","6","Mr.Adaling Vikas Dnyandeo.jpg");
INSERT INTO tbl_faculty VALUES("73","Teaching","Ms. Jadhav A.D","General Science and Humanities","Lecturel","Msc(Physics)","5","Ms. Jadhav A.D.jpeg");
INSERT INTO tbl_faculty VALUES("74","Teaching","Mr.Taware Ranjeet Shivajirao","Mechanical Engineering","Lecturer ","BE(Mech)","9","Mr.Taware Ranjeet Shivajirao.jpg");
INSERT INTO tbl_faculty VALUES("77","Teaching","Miss.Nimbalkar Manali Diliprao","Electronics and Telecommunication","Lecturer ","ME","9","Miss.Nimbalkar Manali Diliprao.jpg");
INSERT INTO tbl_faculty VALUES("136","Teaching","MS .Shendage.P.B","Electronics and Telecommunication","Lecturer","BE E&TC","1","MS .Shendage.P.B.jpg");
INSERT INTO tbl_faculty VALUES("141","Teaching","Mr. Yadav T.P.","Civil Engineering","Lecturer","B.Tech","2","Mr. Yadav T.P..jpg");
INSERT INTO tbl_faculty VALUES("135","Teaching","Ms.Waghmode S B","Electronics and Telecommunication","Lecturer","BE E&TC","1","Ms.Waghmode S B.jpg");
INSERT INTO tbl_faculty VALUES("145","Teaching","Ms.Gaikwad P.P","Electronics and Telecommunication","Lecturer","B.E","2","Ms.Gaikwad P.P.jpg");
INSERT INTO tbl_faculty VALUES("134","Teaching","Ms.Todkar R.M.","Electronics and Telecommunication","Lecturer","BE E&TC","2","Ms.Todkar R.M..jpg");
INSERT INTO tbl_faculty VALUES("83","Teaching","Mr.Deshpande Yogesh Narendra","Electrical Engineering","HOD","M.E","10","Mr.Deshpande Yogesh Narendra.JPG");
INSERT INTO tbl_faculty VALUES("84","Teaching","Mr.Dalavi Amol Dattatray","Electronics and Telecommunication","HOD","B.E","9","Mr.Dalavi Amol Dattatray.jpg");
INSERT INTO tbl_faculty VALUES("144","Teaching","Ms.Gaikwad S.D","Electrical Engineering","Lecturer","B.E","4","Ms.Gaikwad S.D.jpg");
INSERT INTO tbl_faculty VALUES("143","Teaching","MS.Deokate R.N.","Electrical Engineering","Lecturer","M.E ","5","MS.Deokate R.N..JPG");
INSERT INTO tbl_faculty VALUES("88","Teaching","Miss.Gaikwad Joti Shivaji","Electrical Engineering","Lecturer ","B.E","6","Miss.Gaikwad Joti Shivaji.jpg");
INSERT INTO tbl_faculty VALUES("89","Teaching","Mr.Nirmal VIkas Sanjay","Civil Engineering","Lecturer ","ME","5","Mr.Nirmal VIkas Sanjay.jpg");
INSERT INTO tbl_faculty VALUES("90","Teaching","Miss.Nimbalkar Gouri Desharath","Civil Engineering","HOD","B.E","10","Miss.Nimbalkar Gouri Desharath.JPG");
INSERT INTO tbl_faculty VALUES("142","Teaching","Mr. Patil M D","Electrical Engineering","Lecturer","B.E","5","Mr. Patil M D.jpg");
INSERT INTO tbl_faculty VALUES("139","Teaching","MS.Mane V.D","Civil Engineering","Lecturer","B.E","3","MS.Mane V.D.jpg");
INSERT INTO tbl_faculty VALUES("140","Teaching","MS.Kambale P.S","Civil Engineering","Lecturer","B.E","2","MS.Kambale P.S.jpg");
INSERT INTO tbl_faculty VALUES("94","Non-Teaching","Mr.More Shubhash Pandurang","Electrical Engineering","Lab Asst.Electrical","D.E.E","30","Mr.More Shubhash Pandurang.JPG");
INSERT INTO tbl_faculty VALUES("95","Non-Teaching","Mr.Mehar Nitin Dnyandeo","Automobile Engineering","Lab Asst.Automobile","I.T.I","2","Mr.Mehar Nitin Dnyandeo.JPG");
INSERT INTO tbl_faculty VALUES("96","Non-Teaching","Mr.Tambe Nishikant Balasaheb","Automobile Engineering","Peon","Hsc","3","Mr.Tambe Nishikant Balasaheb.jpg");
INSERT INTO tbl_faculty VALUES("97","Non-Teaching","Mr.Shinde Mahesh Rajaram","Civil Engineering","Lab Asst.Civil","I.T.I","1","Mr.Shinde Mahesh Rajaram.jpg");
INSERT INTO tbl_faculty VALUES("98","Non-Teaching","Miss.Kanjale Archana Dadaso","Civil Engineering","Peon","Ssc","1","Miss.Kanjale Archana Dadaso.jpg");
INSERT INTO tbl_faculty VALUES("99","Non-Teaching","Miss.Ghate Aruna Dattatray","General Science and Humanities","Peon","Ssc","1","Miss.Ghate Aruna Dattatray.jpg");
INSERT INTO tbl_faculty VALUES("100","Non-Teaching","Mr.Maneri Javed Rajjakbhai","Mechanical Engineering","Lab Asst.Mech","I.T.I","1","Mr.Maneri Javed Rajjakbhai.jpg");
INSERT INTO tbl_faculty VALUES("101","Non-Teaching","Miss.Danane Sunita Pandurang","Electronics and Telecommunication","Peon","Ssc","2","Miss.Danane Sunita Pandurang.jpg");
INSERT INTO tbl_faculty VALUES("130","Non-Teaching","Miss.Chitare Ujavala Anil","Electrical Engineering","Peon","Ssc","2","Miss.Chitare Ujavala Anil.jpg");
INSERT INTO tbl_faculty VALUES("129","Non-Teaching","Miss.Dhumal Anita Santosh","Mechanical Engineering","Peon","Ssc","2","Miss.Dhumal Anita Santosh.jpg");
INSERT INTO tbl_faculty VALUES("104","Non-Teaching","Mr.Kadam Balu Ganpat","Electrical Engineering",".Electritian","I.T.I.Electrical","12","Mr.Kadam Balu Ganpat.jpg");
INSERT INTO tbl_faculty VALUES("128","Non-Teaching","Mr.Kharade A.B","Mechanical Engineering","Lab Asst.Mech","I.T.I","1","Mr.Kharade A.B.jpg");
INSERT INTO tbl_faculty VALUES("106","Supporting","Miss.Jadhav Rohini Sachin","Others","Librarian","M.LIB.","4","Miss.Jadhav Rohini Sachin.jpg");
INSERT INTO tbl_faculty VALUES("107","Supporting","Mr.Bhosale Hanumant Jalindar","Others","Librarian Asst.","B.LIB","7","Mr.Bhosale Hanumant Jalindar.JPG");
INSERT INTO tbl_faculty VALUES("108","Supporting","Mr.Lavand Pritam Pandurang","Others","System Admin","M.C.A","5","Mr.Lavand Pritam Pandurang.jpg");
INSERT INTO tbl_faculty VALUES("109","Supporting","Mr.Man Pramod Mahadeo","Others","Admin ","B.Sc, M.ba","7","Mr.Man Pramod Mahadeo.jpg");
INSERT INTO tbl_faculty VALUES("132","Supporting","Mr.Malgunde Kashinath Manik","Others","Clerk","M.A","10","Mr.Malgunde Kashinath Manik.jpg");
INSERT INTO tbl_faculty VALUES("111","Supporting","Mr.Patil Amol Jalindar","Others","Store Incharge","B.A","6","Mr.Patil Amol Jalindar.jpg");
INSERT INTO tbl_faculty VALUES("112","Supporting","Mr.Durugkar Amit Chandrakant","Others","Acconutant","M.com","4","Mr.Durugkar Amit Chandrakant.jpg");
INSERT INTO tbl_faculty VALUES("113","Supporting","Mr.Nimbalkar Nilesh Devidas","Others","Acconutant","B.com","3","Mr.Nimbalkar Nilesh Devidas.jpg");
INSERT INTO tbl_faculty VALUES("118","Supporting","Mr.Shaikh Babaso Babulal","Others","Watchman","Ssc","3","Mr.Shaikh Babaso Babulal.jpg");
INSERT INTO tbl_faculty VALUES("119","Supporting","Mr.Yadav Krishana Sitaram","Others","Watchman","Ssc","4","Mr.Yadav Krishana Sitaram.jpg");
INSERT INTO tbl_faculty VALUES("120","Supporting","Mr.Dubale Dadaso Sona","Others","Watchman","Ssc","3","Mr.Dubale Dadaso Sona.jpg");
INSERT INTO tbl_faculty VALUES("121","Supporting","Mr.Yadav Devidas Chandrakant","Others","Watchman","Hsc","4","Mr.Yadav Devidas Chandrakant.jpg");
INSERT INTO tbl_faculty VALUES("122","Supporting","Mr.Waghela Janki Pramchand","Others","Swiper","Ssc","2","Mr.Waghela Janki Pramchand.jpg");
INSERT INTO tbl_faculty VALUES("123","Supporting","Miss.Malshikare Kamal Vitthal","Others","Peon","Ssc","2","Miss.Malshikare Kamal Vitthal.jpg");
INSERT INTO tbl_faculty VALUES("124","Supporting","Mr.Kadam Natha Pandurang","Others","Bus Driver","Hsc","2","Mr.Kadam Natha Pandurang.jpg");
INSERT INTO tbl_faculty VALUES("125","Supporting","Mr.Gaikwad Sanjay Malhari","Others","Bus Driver","Hsc","3","Mr.Gaikwad Sanjay Malhari.jpg");
INSERT INTO tbl_faculty VALUES("126","Supporting","Mr.Chobe Sandip Dhanaji","Others","Bus Driver","Hsc","3","Mr.Chobe Sandip Dhanaji.jpg");
INSERT INTO tbl_faculty VALUES("127","Supporting","Mr.Shinde Jalindar Hanumant","Others","Bus Driver","Hsc","3","Mr.Shinde Jalindar Hanumant.jpg");
INSERT INTO tbl_faculty VALUES("131","Supporting","Mr.Waghmode Gorakh Dnyandeo","Others","Clerk","M.Com","7","Mr.Waghmode Gorakh Dnyandeo.jpg");



DROP TABLE IF EXISTS tbl_gallery;

CREATE TABLE `tbl_gallery` (
  `photoid` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`photoid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO tbl_gallery VALUES("3","IMG-20200125-WA0005.jpg","Talent hunt 2019");
INSERT INTO tbl_gallery VALUES("4","IMG-20200125-WA0016.jpg","Talent hunt 2019");
INSERT INTO tbl_gallery VALUES("5","IMG-20200125-WA0012.jpg","Talent hunt 2019");
INSERT INTO tbl_gallery VALUES("6","IMG-20200125-WA0008.jpg","Talent hunt 2019");
INSERT INTO tbl_gallery VALUES("7","IMG-20200125-WA0013.jpg","Talent hunt 2019 Price ");
INSERT INTO tbl_gallery VALUES("8","IMG-20200125-WA0021.jpg","Talent hunt 2019 Price ");
INSERT INTO tbl_gallery VALUES("9","IMG-20200125-WA0015.jpg","Talent hunt 2019 Price ");
INSERT INTO tbl_gallery VALUES("10","IMG-20200125-WA0007.jpg","Talent hunt 2019 Price ");
INSERT INTO tbl_gallery VALUES("11","IMG-20200125-WA0009.jpg","Talent hunt 2019 Price ");
INSERT INTO tbl_gallery VALUES("12","IMG-20200719-WA0006.jpg","Collge result summer2020");



DROP TABLE IF EXISTS tbl_login;

CREATE TABLE `tbl_login` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `flag` varchar(1) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tbl_login VALUES("1","bppadmin","Phadtare12#$","Gavali","Gavali","Y");
INSERT INTO tbl_login VALUES("2","student","Phadtare12#$","Student","Student","N");



DROP TABLE IF EXISTS tbl_news;

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsdate` date NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO tbl_news VALUES("35","2020-07-24","Admission Open","Admission open 2020-21 For Diploma First and Direct Second Year All Branch","IMG-20200722-WA0016.jpg","IMG-20200722-WA0016.jpg");
INSERT INTO tbl_news VALUES("36","2020-09-23","Time Table Summer ","Time Table Summer 2020","","Exam Time Table Summer - 2020.pdf");
INSERT INTO tbl_news VALUES("30","2019-12-23","Annual gathering Function","Annual gathering Function 2019-20","IMG-20200125-WA0022.jpg","");
INSERT INTO tbl_news VALUES("33","0000-00-00"," महाराष्ट्र राज्य तंत्रशिक्षण मंडळाने covid-19 उद्रेकामुळे निर्माण झालेल्या परिस्थितीमध्ये परीक्षांबाबत काढलेल्या  परिपत्र"," महाराष्ट्र राज्य तंत्रशिक्षण मंडळाने covid-19 उद्रेकामुळे निर्माण झालेल्या परिस्थितीमध्ये परीक्षांबाबत काढलेल्या  \n परिपत्र","","circular.PDF");
INSERT INTO tbl_news VALUES("34","2020-07-20","Advertiesment","100% Result Babasaheb Phadtare Polytechinc College In Summer-2020","IMG-20200719-WA0006.jpg","IMG-20200717-WA0000.jpg");
INSERT INTO tbl_news VALUES("37","2020-09-28","Time Table Summer Final Semester","Time Table Summer Final Semester 2020","","time table summer -202009282020.pdf");




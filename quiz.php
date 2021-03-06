<?php
$finished = false;
$answers = getAllAnswers();
function getInput($qid) {
	global $answers;
	global $finished;
	$answer = "";
	if(array_key_exists($qid, $answers)) {
		$answer = $answers[$qid];
		if($answer != '') {
			$finished = true;
		}
	}
	return '<input type="text" name="'.$qid.'" id="'.$qid.'" value="'.$answer.'"  class="answersInputField" answerShown="false" />';
}
$quiz = array(
	
	array(
		'content'=>'
			<h2>Listening Practice Test</h2>
			<p>This activity has been designed to give you an idea of what to expect when you sit the IELTS listening test. When you are ready, click START TEST and the audio will begin to play. Once the audio is complete, you will have 10 minutes to transfer your answers onto the Answer Sheet before submitting.</p>
			
			<p style="text-align:center; margin-top:30px;"><button class="btn btn-primary btn-lg startbutton" onclick="startTest();">START TEST</button></p>
			<p style="text-align:center; margin-top:30px;"><button class="btn btn-danger btn-lg resetbutton" onclick="resetTest();">RESET TEST</button></p>
			
			<br/><br/><br/>
			
			<h3>TIME<i class="tab"></i>Approximately 30 minutes</h3>
			
			<h3>INSTRUCTIONS TO CANDIDATES</h3>
			
			<p>Start at the beginning of the test and work through it.</p>
			
			<p>You should answer all questions.</p>
			<p>If you cannot do a particular question, leave it and go on to the next.</p>
			<p>You can return to it later.</p>
			<p><b>All answers must be written on the answer sheet.</b></p>
			<p><b>Do not remove this booklet from the examination room.</b></p>

			
			<hr style="height:1px;border:none;color:#333;background-color:#333;" >
			
			<p><b>INFORMATION FOR CANDIDATES</b></p>
			
			<p>There are <b>40</b> questions on this question paper.
			<p>The test is divided as follows:</p>
			
			
						
			<div class="box">
			
			<p>&nbsp;&nbsp; Section 1 <i class="tab"></i><i class="tab"></i><i class="tab"></i><i class="tab"></i> Questions 1 - 10</p>
			<p>&nbsp;&nbsp; Section 2 <i class="tab"></i><i class="tab"></i><i class="tab"></i><i class="tab"></i> Questions 11 - 20</p>
			<p>&nbsp;&nbsp; Section 3 <i class="tab"></i><i class="tab"></i><i class="tab"></i><i class="tab"></i> Questions 21 - 30</p>
			<p>&nbsp;&nbsp; Section 4 <i class="tab"></i><i class="tab"></i><i class="tab"></i><i class="tab"></i> Questions 31 - 40</p>

			
			
			
			</div>
			
			
		'	
	),
	array(
		'content'=>'
			<h2>Listening Practice Test</h2>
			<h3>SECTION 1<i class="tab"></i>Questions 1-10</h3>
			
			<h4>Questions 1-5</h4>
			
			<p><em>Which library matches each description?</em></p>
			
			<p><em>Choose your answers from the box and write the correct letter <strong>A-J</strong> next to questions <strong>1-5</strong>.</em></p>
			
			<table>
			<tr><td><strong>A</strong></td><td>	late night opening		 </td><td><strong>B</strong></td><td>	study rooms				 </td></tr>
			<tr><td><strong>C</strong></td><td>	story telling			 </td><td><strong>D</strong></td><td>	online borrowing		 </td></tr>
			<tr><td><strong>E</strong></td><td>	a postal book service	 </td><td><strong>F</strong></td><td>	printing facilities		 </td></tr>
			<tr><td><strong>G</strong></td><td>	internet training courses</td><td><strong>H</strong></td><td>	weekend opening			 </td></tr>
			<tr><td><strong>I</strong></td><td>	walk-in internet access	 </td><td><strong>J</strong></td><td>	is temporarily closed	 </td></tr>
			</table>
			
			<div class="gray">
			<u>For example</u><br /><br />
			
			    Gosford<i class="tab"></i>……….J…………………
			</div>
			
			
			<table style="border: none;">
			<tbody>
			<tr><td style="border: none;"><strong>1</strong>&nbsp;&nbsp;&nbsp;Ashfield<i class="tab"></i></td><td style="border: none;">'.getInput('q_1').'<br/></td></tr>
			<tr><td style="border: none;"><strong>2</strong>&nbsp;&nbsp;&nbsp;Carlton<i class="tab"></i></td><td style="border: none;">'.getInput('q_2').'<br/></td></tr>
			<tr><td style="border: none;"><strong>3</strong>&nbsp;&nbsp;&nbsp;Springfield<i class="tab"></i></td><td style="border: none;">'.getInput('q_3').'<br/></td></tr>
			<tr><td style="border: none;"><strong>4</strong>&nbsp;&nbsp;&nbsp;Paddington<i class="tab"></i></td><td style="border: none;">'.getInput('q_4').'<br/></td></tr>
			<tr><td style="border: none;"><strong>5</strong>&nbsp;&nbsp;&nbsp;Brookside<i class="tab"></i></td><td style="border: none;">'.getInput('q_5').'<br/></td></tr>
			</tbody>
			</table>
			
			<h4>Questions 6-10</h4>
			
			<p><em>Complete the form below.</em></p>
			
			<p><em>Write <strong>NO MORE THAN THREE WORDS AND/OR A NUMBER</strong> for each answer.</em></p>
			
			
			<p style="text-align:center"><strong>LIBRARIES INFORMATION PACK ORDER FORM</strong></p>
			<p><strong><em>Personal<br />details:</em></strong></p>
			
			
			
			
			
			<p><b>Full Name:</b>&nbsp;John <strong>6</strong> '.getInput('q_6').'</p>
								
			<p><b>Address:</b>&nbsp;PO BOX <strong>7</strong> '.getInput('q_7').'		
					Gosford</p>		
				   				
			<p><b>Date of Birth:</b>&nbsp;<strong>8</strong> '.getInput('q_8').'1984</p>
								
			<p><b>Highest education:</b>&nbsp;<strong>9</strong> '.getInput('q_9').' degree in Accounting</p>
								
			<p><b>Library section most interested in:</b>&nbsp;<strong>10</strong> '.getInput('q_10').'</p>
		
			'		
	),
	array(
		'content'=>'
		
		<h3>SECTION 2<i class="tab"></i>Questions 11 – 20</h3>
			
			<h4>Questions 11 – 13</h4>
			
			<p><em>Complete the summary below.</em></p>
			
			<p><em>Write <strong>NO MORE THAN TWO WORDS</strong> for each answer.</em></p>
			
			<div class="box">
			<p style="text-align:center;"><strong>Computer Health and Safety</strong></p>
			<p>Dry eyes can be experienced especially during the <strong>11</strong> _______________. However, this problem can easily be combated by using a humidifier. Another solution is to use indoor plants such as the <strong>12</strong> _______________ plant, which is very efficient at keeping the air clean and moist. To place an order for either of these, staff members should write their <strong>13</strong> _______________ on one of the forms provided.</p>
			<p><strong>11</strong> '.getInput('q_11').'</p>
			<p><strong>12</strong> '.getInput('q_12').'</p>
			<p><strong>13</strong> '.getInput('q_13').'</p>
			</div>
			
			<h4>Questions 14 – 16</h4>
			
			<p><em>Complete the sentences below.</em></p>
			
			<p><em>Write <strong>NO MORE THAN TWO WORDS AND/OR A NUMBER</strong> for each answer.</em></p>
			
			
			<p><strong>14</strong>	The optician’s visit to the company begins on '.getInput('q_14').'.</p>
			
			<p><strong>15</strong>	Staff need to measure their screen to eye distance when they are sitting in their usual '.getInput('q_15').'.</p>
			<p><strong>16</strong>	Staff who miss the optician’s visit can go to her clinic in the '.getInput('q_16').'.</p>
			
			
				
		'
		
	),
	array(
		
		'content'=>'
		
		
			<h4>Questions 17– 20</h4>
			
			<p><em>Answer the questions below.</em></p>
			
			<p><em>Write <strong>NO MORE THAN THREE WORDS AND/OR A NUMBER</strong> for each answer.</em></p>
			
			
			<p><strong>17</strong>	How long has the company been using laptops?
			
			<br />'.getInput('q_17').'</p>
			
			<p><strong>18</strong>	Which department now only uses laptop computers?
			
			<br />'.getInput('q_18').'</p>
			
			<p><strong>19</strong>	What risk is associated with connecting a laptop to a desk computer?
			
			<br />'.getInput('q_19').'</p>
			
			<p><strong>20</strong>	What does the company offer to people who regularly need to carry laptops?
			
			<br />'.getInput('q_20').'</p>
			
			
			
		'
	),
	array(
		'content'=>'
			<h3>SECTION 3<i class="tab"></i>Questions 21-30</h3>
			
			<h4>Questions 21-23</h4>
			
			<p><em>Complete the notes below.</em></p>
			
			<p><em>Write <strong>NO MORE THAN TWO WORDS AND/OR A NUMBER</strong> for each answer.</em></p>
			
			<div class="box">
			<p style="text-align:center;"><strong>ESSAY FEEDBACK</strong></p>
			
			<p>Part 1<br />
			* Good point about how babies <strong>21</strong> '.getInput('q_21').' differently.</p>
			
			<p>Part 2<br />
			* Omit the part about Mia being a <strong>22</strong> '.getInput('q_22').' baby.</p>
			
			<p>Part 3<br />
			* Don’t use <strong>23</strong> '.getInput('q_23').'.</p>
			</div>
			
			
		'
		
	),
	array(
		
		'content' =>'
		
		
			<h4>Questions 24-28</h4>
			
			<p>What is said about the supporting evidence that the student uses in her essay?</p>
			
			<p>Classify the following evidence as:</p>
			
			<p><strong>A</strong>&nbsp;&nbsp;the student’s own idea.</p>
			<p><strong>B</strong>&nbsp;&nbsp;paraphrased from another writer.</p>
			<p><strong>C</strong>&nbsp;&nbsp;copied exactly from another writer.</p>
			
			<p><em>Write the correct letter <strong>A</strong>, <strong>B</strong>, or <strong>C</strong> next to questions 24-28. You may choose any letter more than once. </em></p>
			
			<p>Evidence Used in the Essay</p>
			
			<table style="border: none;">
			<tbody>
			<tr><td style="border: none;"><strong>24</strong>&nbsp;&nbsp;The belief that young babies cannot feel pain. </td><td style="border: none;">'.getInput('q_24').'<br/></td></tr>
			<tr><td style="border: none;"><strong>25</strong>&nbsp;&nbsp;How babies respond to their surroundings. </td><td style="border: none;">'.getInput('q_25').'<br/></td></tr>
			<tr><td style="border: none;"><strong>26</strong>&nbsp;&nbsp;Examples of different development rates. </td><td style="border: none;">'.getInput('q_26').'<br/></td></tr>
			<tr><td style="border: none;"><strong>27</strong>&nbsp;&nbsp;Mia’s response to physical sensations. </td><td style="border: none;">'.getInput('q_27').'<br/></td></tr>
			<tr><td style="border: none;"><strong>28</strong>&nbsp;&nbsp;How babies communicate without words. </td><td style="border: none;">'.getInput('q_28').'<br/></td></tr>
			</tbody>
			</table>
			
			<h4>Questions 29 and 30</h4>
			
			<p><em>Choose the correct letter <strong>A</strong>, <strong>B</strong>, or <strong>C</strong></em>.</p>
			
			<p><strong>29</strong>&nbsp;&nbsp;The student decides to get some additional information about referencing from</p>
			
			<table style="border: none;">
			<tbody>
			<tr><td style="border: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>A</strong><i class="tab"></i>the library. </td></tr>
			<tr><td style="border: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>B</strong><i class="tab"></i>the assignment booklet. </td></tr>
			<tr><td style="border: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>C</strong><i class="tab"></i>the university website.  </td></tr>
			<tr><td style="border: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.getInput('q_29').'</td></tr>
			</tbody>
			</table>
			
			
			<p><strong>30</strong>&nbsp;&nbsp;What still needs to be included in the final draft?</p>
			
			
			<table style="border: none;">
			<tbody>
			<tr><td style="border: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>A</strong><i class="tab"></i>a cover page </td></tr>
			<tr><td style="border: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>B</strong><i class="tab"></i>a reference list </td></tr>
			<tr><td style="border: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>C</strong><i class="tab"></i>the total number of words </td></tr>
			<tr><td style="border: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.getInput('q_30').'</td></tr>
			</tbody>
			</table>

		
		
		
		'
		
		
	),
	array (
		'content'=>'
			<h3>SECTION 4<i class="tab"></i>Questions 31-40</h3>
			
			<h4>Questions 31-40</h4>
			
			<p><em>Complete the notes below.</em></p>
			
			<p><em>Write <strong>NO MORE THAN TWO WORDS</strong> for each answer.</em></p>
			
			<div class="box">
			<p><strong><u>Causes of Language Loss</u></strong></p>
			
			<p>i. Colonisation e.g. in <strong>31</strong> _______________ and <strong>32</strong> _______________.</p>
			<p><strong>31</strong> '.getInput('q_31').'</p>
			<p><strong>32</strong> '.getInput('q_32').'</p>
			<p>ii.	Government policy directed at the <strong>33</strong> '.getInput('q_33').' and schools.</p>
			
			<p>Examples:</p>
				
			<p>&nbsp;&nbsp;&nbsp;* Russian children were sent to <strong>34</strong> '.getInput('q_34').' during  the 1950s.</p>
			
			<p>&nbsp;&nbsp;&nbsp;* In the US, English and Spanish <strong>35</strong> '.getInput('q_35').' programs were ended.</p>
			
			<p>iii.	Linguistic Imperialism - People associate a language with <br/><strong>36</strong> _______________ and <strong>37</strong> _______________ and so want to speak it.</p>
			<p><strong>36</strong> '.getInput('q_36').'</p>
			<p><strong>37</strong> '.getInput('q_37').'</p>
			
			<p><strong><u>Arguments for Preserving Languages</u></strong></p>
			
			<p>i.	Linguistic Relativity - Language loss may lead to a reduction in the diversity of  <br/><strong>38</strong>'.getInput('q_38').' that people are able to explain. </p>
			
			<p>ii.	Cultural Pluralism – Language loss affects:</p>
			
			<p>
			&nbsp;&nbsp;&nbsp;* art forms<br />
			&nbsp;&nbsp;&nbsp;* <strong>39</strong> '.getInput('q_39').' systems<br />
			&nbsp;&nbsp;&nbsp;* human relationships</p>
			
			<p>iii.	Social <strong>40</strong> '.getInput('q_40').' - Language loss = loss of personal identity.</p>
			
			</div>

		
		'
		
	),
	array(
		'content'=>'
			<h2>ANSWER SHEET</h2>
			<br/><br/>
			<div class="sect">
			<p><strong>1.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_1').' <i class="a_1"></i></p>
			<p><strong>2.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_2').' <i class="a_2"></i></p>
			<p><strong>3.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_3').' <i class="a_3"></i></p>
			<p><strong>4.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_4').' <i class="a_4"></i></p>
			<p><strong>5.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_5').' <i class="a_5"></i></p>
			<p><strong>6.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_6').' <i class="a_6"></i></p>
			<p><strong>7.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_7').' <i class="a_7"></i></p>
			<p><strong>8.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_8').' <i class="a_8"></i></p>
			<p><strong>9.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_9').' <i class="a_9"></i></p>
			<p><strong>10.</strong> '.getInput('a_10').'  <i class="a_10"></i></p>
			<p><strong>11.</strong> '.getInput('a_11').'  <i class="a_11"></i></p>
			<p><strong>12.</strong> '.getInput('a_12').'  <i class="a_12"></i></p>
			<p><strong>13.</strong> '.getInput('a_13').'  <i class="a_13"></i></p>
			<p><strong>14.</strong> '.getInput('a_14').'  <i class="a_14"></i></p>
			<p><strong>15.</strong> '.getInput('a_15').'  <i class="a_15"></i></p>
			<p><strong>16.</strong> '.getInput('a_16').'  <i class="a_16"></i></p>
			<p><strong>17.</strong> '.getInput('a_17').'  <i class="a_17"></i></p>
			<p><strong>18.</strong> '.getInput('a_18').'  <i class="a_18"></i></p>
			<p><strong>19.</strong> '.getInput('a_19').'  <i class="a_19"></i></p>
			<p><strong>20.</strong> '.getInput('a_20').'  <i class="a_20"></i></p>
			</div><div class="sect">
			<p><strong>21.</strong> '.getInput('a_21').'  <i class="a_21"></i></p>
			<p><strong>22.</strong> '.getInput('a_22').'  <i class="a_22"></i></p>
			<p><strong>23.</strong> '.getInput('a_23').'  <i class="a_23"></i></p>
			<p><strong>24.</strong> '.getInput('a_24').'  <i class="a_24"></i></p>
			<p><strong>25.</strong> '.getInput('a_25').'  <i class="a_25"></i></p>
			<p><strong>26.</strong> '.getInput('a_26').'  <i class="a_26"></i></p>
			<p><strong>27.</strong> '.getInput('a_27').'  <i class="a_27"></i></p>
			<p><strong>28.</strong> '.getInput('a_28').'  <i class="a_28"></i></p>
			<p><strong>29.</strong> '.getInput('a_29').'  <i class="a_29"></i></p>
			<p><strong>30.</strong> '.getInput('a_30').'  <i class="a_30"></i></p>
			</div><div class="sect">
			<p><strong>31.</strong> '.getInput('a_31').'  <i class="a_31"></i></p>
			<p><strong>32.</strong> '.getInput('a_32').'  <i class="a_32"></i></p>
			<p><strong>33.</strong> '.getInput('a_33').'  <i class="a_33"></i></p>
			<p><strong>34.</strong> '.getInput('a_34').'  <i class="a_34"></i></p>
			<p><strong>35.</strong> '.getInput('a_35').'  <i class="a_35"></i></p>
			<p><strong>36.</strong> '.getInput('a_36').'  <i class="a_36"></i></p>
			<p><strong>37.</strong> '.getInput('a_37').'  <i class="a_37"></i></p>
			<p><strong>38.</strong> '.getInput('a_38').'  <i class="a_38"></i></p>
			<p><strong>39.</strong> '.getInput('a_39').'  <i class="a_39"></i></p>
			<p><strong>40.</strong> '.getInput('a_40').'  <i class="a_40"></i></p>
			</div>
			<p></p>
			<p style="text-align:center; clear:left; padding-top:50px;">
			<button class="btn btn-primary btn-lg" id="handinbutton" onclick="handIn();">Hand In Answer Sheet</button> <button class="btn btn-primary btn-lg" id="showanswerbutton" onclick="showanswers();">Show Answers</button>

			<br><span id="checkingAnswers">Checking Answers <span id="spinner"><i class="fa fa-spinner fa-pulse"></i></span></span>
			<p style="color:red; margin-top:10px; font-size:80%; text-align:center" class="finishedhint">To reset, go to the start page</p>
			</p>
		'
	)
	
	
);

$results = array(
	'a_1'=>array('E'),
	'a_2'=>array('H'),
	'a_3'=>array('I'),
	'a_4'=>array('B'),
	'a_5'=>array('C'),
	'a_6'=>array('Bonham'),
	'a_7'=>array('451'),
	'a_8'=>array('29th January','29 January','January 29','January 29th','29/01','01/29', 'Jan 29', '29 Jan', '29.01'),
	'a_9'=>array('Masters','Master', "Master's"),
	'a_10'=>array('journals','the journals'),
	'a_11'=>array('winter'),
	'a_12'=>array('spider', 'spiders'),
	'a_13'=>array('room number','room numbers'),
	'a_14'=>array('15 May','May 15','May 15th','15th May','15/5','5/15'),
	'a_15'=>array('working position','position','working positions','positions'),
	'a_16'=>array('city centre', 'city center'),
	'a_17'=>array('6 months','six months'),
	'a_18'=>array('sales','the sales department','sales department','sales departments'),
	'a_19'=>array('electric shock','an electric shock','electric shocks'),
	'a_20'=>array('backpack','backpacks','special backpacks','a special backpack'),
	'a_21'=>array('develop'),
	'a_22'=>array('delicate'),
	'a_23'=>array('bullet points'),
	'a_24'=>array('B'),
	'a_25'=>array('C'),
	'a_26'=>array('A'),
	'a_27'=>array('B'),
	'a_28'=>array('C'),
	'a_29'=>array('A'),
	'a_30'=>array('B'),
	'a_31'=>array('Australia','the U.S.', 'U.S.', 'U.S.A.','US', 'USA', 'the US', 'the USA'),
	'a_32'=>array('Australia','the U.S.', 'U.S.', 'U.S.A.','US', 'USA', 'the US', 'the USA'),
	'a_33'=>array('workplace'),
	'a_34'=>array('boarding schools'),
	'a_35'=>array('bilingual education','education','bi-lingual education','bilingual','bi-lingual'),
	'a_36'=>array('success'),
	'a_37'=>array('power'),
	'a_38'=>array('ideas'),
	'a_39'=>array('belief'),
	'a_40'=>array('justice','justice argument')
);

?>
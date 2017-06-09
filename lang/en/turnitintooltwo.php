<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

// Version: 2015040101
// Date: 2015-04-01
// Language: en.

$string['addsubmission'] = 'Add Submission';
$string['allowlate'] = 'Allow Submissions after the Due Date';
$string['allsubmissions'] = 'Submission Inbox';
$string['anon'] = 'Anonymous';
// START UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['anonenabled'] = 'Anonymous Grading Enabled';
// END UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['anytype'] = 'Any Submission Type';
$string['assigngeterror'] = 'Could not get turnitintooltwo data';
$string['ced'] = 'Class End Date';
$string['classcreationerror'] = 'Turnitin Class creation failed';
$string['classupdateerror'] = 'Could not update Turnitin Class data';
$string['configureerror'] = 'You must configure this module fully as Administrator before using it within a course. Please contact your Moodle administrator.';
$string['connecttest'] = 'Test Turnitin Connection';
$string['connecttestcommerror'] = 'Could not connect to Turnitin. Double check your API URL setting.';
$string['connecttesterror'] = 'There was an error connecting to Turnitin the return error message is below:<br />';
$string['connecttestsuccess'] = 'Moodle has successfully connected to Turnitin.';
$string['copyrightagreement'] = 'By checking this box, I confirm that this submission is my own work and I accept all responsibility for any copyright infringement that may occur as a result of this submission.';
$string['coursegeterror'] = 'Could not get course data';
$string['courseiderror'] = 'Course ID is incorrect';
$string['deleteconfirm'] = 'Are you sure you want to delete this submission?\n\nThis action cannot be undone.';
// START UCLA MOD: CCLE-6303 - Download icon tooltip.
// $string['downloadsubmission'] = 'Download Submission';
$string['downloadsubmission'] = 'Download submission';
// END UCLA MOD: CCLE-6303 - Download icon tooltip.
// START UCLA MOD: CCLE-6300 - Trash can tooltip.
// $string['deletesubmission'] = 'Delete Submission';
$string['deletesubmission'] = 'Delete submission';
// END UCLA MOD: CCLE-6300.
$string['dtdue'] = 'Due Date';
$string['dtpost'] = 'Post Date';
$string['dtstart'] = 'Start Date';
$string['excludebiblio'] = 'Exclude Bibliography';
$string['excludebiblio_help'] = 'This setting allows the instructor to choose to exclude text appearing in the bibliography, works cited, or references sections of student papers from being checked for matches when generating Originality Reports. This setting can be overridden in individual Originality Reports.';
$string['excludepercent'] = 'Percent';
$string['excludequoted'] = 'Exclude Quoted Material';
$string['excludequoted_help'] = 'This setting allows the instructor to choose to exclude text appearing in the quotes from being checked for matches when generating Originality Reports. This setting can be overridden in individual Originality Reports.';
$string['excludevalue'] = 'Exclude Small Matches';
$string['excludevalue_help'] = 'This setting allows the instructor to choose to exclude matches that are not of sufficient length (determined by the instructor) from being considered when generating Originality Reports. This setting can be overridden in individual Originality Reports.';
$string['excludewords'] = 'Words';
$string['filetosubmit'] = 'File to Submit';
$string['filetosubmit_help'] = 'When submitting a file to an assignment part, browse your computer for the file to upload using this form element.';
$string['fileupload'] = 'File Upload';
// START UCLA MOD: CCLE-6469-rename-generate-report.
// $string['genduedate'] = 'Generate reports on due date (resubmissions are allowed until due date)';
// $string['genimmediately1'] = 'Generate reports immediately (resubmissions are not allowed)';
// $string['genimmediately2'] = 'Generate reports immediately (resubmissions are allowed until due date)';
$string['genduedate'] = 'Resubmissions allowed until due date (generate reports on due date)';
$string['genimmediately1'] = 'Resubmissions disallowed';
$string['genimmediately2'] = 'Resubmissions allowed until due date (generate reports immediately)';
// END UCLA MOD: CCLE-6469-rename-generate-report.
$string['institutionalrepository'] = 'Institutional Repository (Where Applicable)';
$string['institutionalchecksettings'] = 'Check against<br />Institutional Repository';
$string['institutionalcheck'] = 'Check against Institutional Repository';
$string['internetcheck'] = 'Check against internet';
$string['internetcheck_help'] = 'Check against the Turnitin internet repository when processing Originality Reports for papers. The similarity index percentage may decrease if this is de-selected.';
$string['journalcheck'] = 'Check against journals,<br />periodicals and publications';
$string['journalcheck_help'] = 'Check against the Turnitin journals, periodicals and publications repository when processing Originality Reports for papers. The similarity index percentage may decrease if this is de-selected.';
$string['maxfilesize'] = 'Maximum File Size';
$string['maxfilesize_help'] = 'This setting determines the maximum file size for user submissions to each assignment part. The maximum value you can set this value to is dictated by the value set in course settings, this value is further capped to a maximum file size of 40Mb which is the maximum allowed filesize for file uploads to Turnitin.';
$string['maxlength'] = 'The maximum length for {$a->field} is {$a->length} characters';
// START UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['maxmarks'] = 'Maximum grade';
// END UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['pluginname'] = 'Turnitin Assignment 2';
$string['modulename'] = 'Turnitin Assignment 2';
// START UCLA MOD: CCLE-6293-Auto-generated-link.
// $string['modulenameplural'] = 'Turnitin Assignments';
$string['modulenameplural'] = 'Turnitin';
// END UCLA MOD: CCLE-6293.
$string['moduleversion'] = 'Version';
$string['mysubmissions'] = 'My Submissions';
$string['nolimit'] = 'No Limit';
$string['nonmoodleuser'] = 'Non Moodle User';
$string['norepository'] = 'No Repository';
$string['nosubmissions'] = 'No submissions have been made';
$string['notavailableyet'] = 'Not available';
$string['numberofparts'] = 'Number of Parts';
$string['numberofparts_help'] = 'Allows for the creation of a multi part assignment, individual users may submit one piece of work to each part.';
$string['overallgrade'] = 'Overall Grade';
$string['overallgrade_help'] = 'The overall grade determines the maximum allowed grade for the overall assignment, each part of an assignment has a maximum mark allocated which is used to proportionally distribute the grades in order to determine the overall grade.';
$string['partdberror'] = 'There was a problem entering Part {$a} into the database<br />';
$string['partupdateerror'] = 'There was a problem updating Part {$a} in the database<br />';
$string['partdeleteerror'] = 'Could not delete assignment part {$a} data';
$string['partdeletewarning'] = 'The assignment part you are trying to delete contains submissions. You will lose these submissions if you delete this assignment part.\n\nAre you sure you want to continue?';
$string['partposterror'] = 'Start date must be before post date.';
$string['partgeterror'] = 'Could not get assignment part data';
$string['partname'] = 'Assignment Part';
$string['partnameerror'] = 'Part name can not left blank.';
$string['partdueerror'] = 'Start date must be before due date.';
$string['pending'] = 'Pending';
$string['permissiondeniederror'] = 'You do not have the correct permission to complete the requested action';
$string['pluginadministration'] = 'Turnitin Assignment 2 Administration';
$string['portfolio'] = 'Portfolio';
$string['print'] = 'Print';
$string['proxypassword'] = 'Proxy Password';
$string['proxypassword_desc'] = '<b>[Optional]</b><br />If your proxy requires Authentication enter the password here.';
$string['proxyport'] = 'Proxy Port';
$string['proxyport_desc'] = '<b>[Optional]</b><br />If your server uses a Proxy to connect to the internet enter the proxy port here.';
$string['proxyurl'] = 'Proxy URL';
$string['proxyurl_desc'] = '<b>[Optional]</b><br />If your server uses a Proxy to connect to the internet enter the proxy address here.';
$string['proxyuser'] = 'Proxy Username';
$string['proxyuser_desc'] = '<b>[Optional]</b><br />If your proxy requires Authentication enter the username here.';
// START UCLA MOD: CCLE-6469-rename-report-generation-speed.
// $string['reportgenspeed'] = 'Report Generation Speed';
$string['reportgenspeed'] = 'Resubmissions';
// END UCLA MOD: CCLE-6469-rename-report-generation-speed.
$string['resubmission'] = 'Resubmission';
// START UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['resubmissiongradewarn'] = 'Resubmissions are allowed for this assignment until the due date passes. Any and all grades will be deleted when or if the paper is resubmitted. Would you like to continue?';
$string['resubmissiongradewarnaware'] = 'Please be aware that if this resubmission is made, any and all grades will be deleted.';
// END UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['resubmit'] = 'Resubmit';
$string['reveal'] = 'Reveal';
$string['revealerror'] = 'You must include a valid reason for unmasking a students name.';
$string['revealreason'] = 'Reason for Unmasking';
$string['saveusage'] = 'Save Data Dump';
$string['selectoption'] = 'Select Option';
$string['showusage'] = 'Show Data Dump';
$string['spapercheck'] = 'Check against stored student papers';
$string['spapercheck_help'] = 'Check against the Turnitin student paper repository when processing Originality Reports for papers. The similarity index percentage may decrease if this is de-selected.';
$string['standardrepository'] = 'Standard Repository';
$string['student'] = 'Student';
$string['studentreports'] = 'Display Originality Reports to Students';
$string['studentreports_help'] = 'Allows you to display Turnitin originality reports to student users. If set to yes the originality report generated by Turnitin are available for the student to view.';
$string['studentstatus'] = 'Submitted {$a->modified} (Paper ID: {$a->objectid})';
$string['submissiondeleteerror'] = 'Could not delete submissions';
$string['submissionextract'] = 'Submission extract';
$string['submissionfileerror'] = 'You must attach a file for submission';
$string['submissionfiletypeerror'] = 'File type not allowed. Allowed types are ({$a})';
$string['submissiongeterror'] = 'Could not get submission data';
$string['submissiongrade'] = 'Grade';
$string['submissionorig'] = 'Similarity';
$string['submissionpart'] = 'Submission Part';
$string['submissionpart_help'] = 'Select the part of the Turnitin Assignment that this submission is to be made to.';
$string['submissions'] = 'Submissions';
$string['submissiontexterror'] = 'You must include the text for this submission';
$string['submissiontitle'] = 'Submission Title';
$string['submissiontitle_help'] = 'Enter the submission title for the piece of work you are submitting.';
$string['submissiontitleerror'] = 'You must include a title for this submission';
$string['submissiontype'] = 'Submission Type';
$string['submissiontype_help'] = '<p>Indicates the submission type(s) you are allowed to submit to Turnitin.</p>';
$string['submissionupdateerror'] = 'Could not update submission data';
$string['submissionuploadsuccess'] = 'Your submission has successfully been uploaded to Turnitin.';
// START UCLA-MOD: CCLE-5544 Improve Turnitintwo submit button
// $string['submitpaper'] = 'Submit Paper';
$string['submitpaper'] = 'Submit';
// END UCLA-MOD: CCLE-5544 Improve Turnitintwo submit button
$string['submitpapersto'] = 'Store Student Papers';
$string['submitpapersto_help'] = 'This setting provides instructors with the ability to select whether papers are stored in a Turnitin student paper repository. The benefit of submitting papers to the student paper repository is that student papers submitted to the assignment are checked against other students&#39; submissions within your current and previous classes. If you select &#34;no repository&#34;, your students&#39; papers will not be stored in the Turnitin student paper repository.';
$string['submitted'] = 'Submitted';
$string['submittoturnitin'] = 'Submit to Turnitin';
$string['textsubmission'] = 'Text Submission';
$string['texttosubmit'] = 'Text to Submit';
$string['texttosubmit_help'] = 'Copy and paste the text of your submission into this box.';
$string['title'] = 'Title';
$string['turnitinaccountid'] = 'Turnitin Account ID';
$string['turnitinaccountid_desc'] = '<b>[Required]</b><br />Enter your Turnitin Primary Account ID';
// START UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['turnitinanon'] = 'Anonymous Grading';
// END UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['turnitinapiurl'] = 'Turnitin API URL';
$string['turnitindeleteconfirm'] = 'Deleting papers removes them from your submissions list and inbox but does not completely\nremove them from the Turnitin database.\n\nAre you sure you want to delete this submission? This action cannot be undone.';
$string['turnitindeletionerror'] = 'Turnitin submission deletion failed. The local Moodle copy was removed but the submission in Turnitin could not be deleted.';
$string['turnitinenrolstudents'] = 'Enrol All Students';
$string['turnitinloading'] = 'Synchronising Data';
$string['turnitinpart'] = 'Part {$a}';
// START UCLA MOD: CCLE-6300 Trash can tooltip.
// $string['turnitinrefreshsubmissions'] = 'Refresh Submissions';
$string['turnitinrefreshsubmissions'] = 'Refresh submission';
// START UCLA MOD: CCLE-6300.
$string['turnitinsecretkey'] = 'Turnitin Shared Key';
$string['turnitinsecretkey_desc'] = '<b>[Required]</b><br />Enter your Turnitin Shared Key<br /><i>(Set by your Turnitin Administrator)</i>';
$string['turnitintooltwo'] = 'Turnitin Tool';
$string['turnitintooltwo:admin'] = 'Administer Turnitin Tool';
$string['turnitintooltwo:grade'] = 'Grade Turnitin Tool Assignments';
$string['turnitintooltwo:submit'] = 'Submit to Turnitin Tool Assignments';
$string['turnitintooltwo:read'] = 'Read Turnitin Tool Assignments';
$string['turnitintooltwo:view'] = 'View Turnitin Tool Assignments';
$string['turnitintooltwoadministration'] = 'Turnitin Assignment 2 Administration';
$string['turnitintooltwoagreement'] = 'Disclaimer / Agreement';
$string['turnitintooltwoagreement_default'] = 'I confirm that this submission is my own work and I accept all responsibility for any copyright infringement that may occur as a result of this submission.';
$string['turnitintooltwointro'] = 'Summary';
$string['turnitintooltwoname'] = 'Turnitin Assignment Name';
$string['turnitintooltworesetdata0'] = 'Copy Turnitin Assignments <i>(Create Duplicates, New Turnitin Class)</i>';
$string['turnitintooltworesetdata1'] = 'Replace Turnitin Assignments <i>(Replace Assignment Parts, Reuse Turnitin Class)</i>';
$string['turnitintooltworesetdata2'] = 'Leave Turnitin Assignments Untouched';
$string['turnitintooltworesetinfo'] = 'Choose an option below for the Turnitin Assignments in this course:';
$string['turnitintooltwoupdateerror'] = 'Could not update turnitintooltwo data';
$string['turnitintooltwoagreement_desc'] = '<b>[Optional]</b><br />Enter an agreement confirmation statement for submissions.<br />(<b>Note:</b> If the agreement is left completely blank then no agreement confirmation will be required by students during submission)';
$string['turnitintooltwodeleteerror'] = 'Could not delete turnitintooltwo data';
$string['turnitintooltwogeterror'] = 'Could not get turnitintooltwo data';
// START UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['turnitinuseanon'] = 'Use Anonymous Grading';
$string['turnitinuseanon_desc'] = 'Choose whether to allow Anonymous Grading when grading submissions.<br /><i>(This is only available to those that have Anonymous Grading configured for their account)</i>';
// END UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['turnitinusegrademark'] = 'Use GradeMark';
$string['turnitinusegrademark_help'] = 'Use this setting to choose whether to use Turnitin GradeMark to grade the submissions or use Moodle to grade submission.';
$string['turnitinusegrademark_desc'] = 'Choose whether to use GradeMark to grade submissions.<br /><i>(This is only available to those that have GradeMark configured for their account)</i>';
$string['turnitinuserepository'] = 'Enable Institutional Repository';
$string['turnitinuserepository_desc'] = 'Choose whether to allow use of Institutional Repositories in Turnitin Assignments.<br /><i>(This is only available to those that have an Institutional Repository enabled for their account)</i>';
$string['turnitintutorsremove'] = 'Are you sure you want to remove this tutor from the course within Turnitin?';
$string['turnitinuserepository_help'] = 'Use this setting to enable the Institutional Repository option in the assignment set up screen.<br /><i>(This is only available to those that have an Institutional Repository enabled for their account)</i>';
$string['tutorstatus'] = '{$a->submitted}/{$a->total} Student Submissions, {$a->graded} Submission{$a->gplural} Graded';
$string['type'] = 'Submission Type';
$string['types'] = 'Submission Types';
$string['types_help'] = '<p>Submissions can be made in two different formats. Copy and Paste or File Upload.</p>';
$string['unlinkusers'] = 'Unlink Users';
$string['usercreationerror'] = 'Turnitin user creation failed';
$string['userdeleteerror'] = 'Could not delete user data';
$string['usergeterror'] = 'Could not get user data';
$string['userstounlink'] = 'Users to Unlink';
$string['userupdateerror'] = 'Could not update user data';
$string['viewreport'] = 'View Report';
$string['wrongaccountid'] = 'There was an error linking your Turnitin Class. The account you have configured is account {$a->current}. The account this class is from is {$a->backupid}. You can only restore classes that originated in the same Turnitin account.';
$string['copyassigndata'] = 'Copy Turnitin Assignment Data';
$string['replaceassigndata'] = 'Replace Turnitin Assignment Data';
$string['downloadexport'] = 'Export';
$string['downloadorigzip'] = 'ZIP File (Original Format)';
$string['downloadpdfzip'] = 'ZIP File (PDF)';
$string['downloadgradexls'] = 'Grade Export (XLS)';
$string['turnitintutors'] = 'Turnitin Tutors';
$string['turnitintutorsadd'] = 'Add Turnitin Tutor';
$string['turnitintutorsallenrolled'] = 'All Tutors are enrolled on Turnitin';
// START UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['turnitintutors_desc'] = 'The selected Tutors below are enrolled as tutors on this Turnitin Class.';
// END UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['duplicatesfound'] = 'Duplicate copies of the same Turnitin assignments were found, duplicates occur when one or more Moodle Direct assignment is connected to the same one Turnitin assignment via the Turnitin API. This is known to cause issues, most notably submissions made to one of the duplicates will show up in the submission inbox of the others. To fix this you should either delete the duplicate assignments or reset the course where the duplicate assignments are.<br /><br />The following duplicates were found:';
$string['erater'] = 'Enable e-rater grammar check';
$string['eraternoun'] = 'E-rater';
$string['erater_handbook'] = 'ETS&copy; Handbook';
$string['erater_dictionary'] = 'e-rater Dictionary';
$string['erater_categories'] = 'e-rater Categories';
$string['erater_spelling'] = 'Spelling';
$string['erater_grammar'] = 'Grammar';
$string['erater_usage'] = 'Usage';
$string['erater_mechanics'] = 'Mechanics';
$string['erater_style'] = 'Style';
$string['erater_handbook_advanced'] = 'Advanced';
$string['erater_handbook_highschool'] = 'High School';
$string['erater_handbook_middleschool'] = 'Middle School';
$string['erater_handbook_elementary'] = 'Elementary School';
$string['erater_handbook_learners'] = 'English Learners';
$string['erater_dictionary_enus'] = 'US English Dictionary';
$string['erater_dictionary_engb'] = 'UK English Dictionary';
$string['erater_dictionary_en'] = 'Both US and UK English Dictionaries';
$string['turnitinuseerater'] = 'Enable ETS&copy;';
$string['turnitinuseerater_desc'] = 'Choose whether to enable ETS&copy; grammar checking.<br /><i>(Enable this option only if ETS&copy; e-rater is enabled on your Turnitin account)</i>';
$string['student_read'] = 'The student viewed the paper on:';
$string['student_notread'] = 'The student has not viewed this paper.';
$string['relinkusers'] = 'Relink Users';
$string['unlinkrelinkusers'] = 'Unlink / Relink Turnitin Users';
$string['usersunlinkrelink'] = 'Users to Unlink / Relink';
$string['turnitinid'] = 'Turnitin ID';
$string['turnitinsubmissionid'] = 'Turnitin submission id';
$string['defaults'] = 'Default Settings';
$string['defaults_desc'] = 'The following settings will be the default settings used for new instances of the Moodle Direct Turnitin Assignment 2';
$string['upgradeavailable'] = 'Upgrade Available';
$string['coursemodidincorrect'] = 'Course Module ID was incorrect';
$string['coursemisconfigured'] = 'Course is misconfigured';
$string['coursemodincorrect'] = 'Course module is incorrect';
$string['no'] = 'No';
$string['yes'] = 'Yes';
$string['migrationassignmentcreated'] = 'Migration Assignment created - Id: {$a}';
$string['migrationassignmentpartcreated'] = 'Migration Assignment part created - Id: {$a}';
$string['migrationassignmentcreationerror'] = 'Could not create migration assignment - course {$a}';
$string['migrationassignmenterror1'] = 'Could not add a new course module to the course {$a}';
$string['migrationassignmenterror2'] = 'Could not add the new course module to that section - course {$a}';
$string['migrationassignmenterror3'] = 'Could not create an event for the migrated assignment - course {$a}';
$string['migrationcoursecreateerror'] = 'Course {$a} could not be created on Moodle';
$string['migrationcoursecreatederror'] = 'Course {$a} was recreated but there was an error saving the link';
$string['migrationcoursecreated'] = 'Class from Turnitin recreated on Moodle';
$string['migrationcoursegeterror'] = 'Unable to get any of the classes from Turnitin';
$string['migrationassignmentgeterror'] = 'Unable to get any of the assignments from Turnitin';
$string['getassignmenterror'] = 'Could not get migration assignments from Turnitin';
$string['checkupdateavailableerror'] = 'Could not check for Moodle Direct version update';
// START UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['maxmarkserror'] = 'Maximum points must be between 0 and 100';
// END UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['nosubmissiondataavailable'] = 'No other submission data available';
$string['nointegration'] = 'No Integration';
$string['testingconnection'] = 'Testing Connection to Turnitin';
$string['integration'] = 'Integration';
$string['id'] = 'Id';
$string['course'] = 'Course';
$string['selectcoursecategory'] = 'Select Course Category';
$string['module'] = 'Module';
$string['source'] = 'Source';
$string['similarity'] = 'Similarity';
$string['moodlelinked'] = 'Linked to Moodle';
$string['coursegettiierror'] = 'Could not get course data from Turnitin';
$string['savecourseenddateerror'] = 'There was an error when trying to save a new course end date in Turnitin';
$string['savecourseenddate'] = 'Save new course end date';
$string['newcourseenddate'] = 'New course end date';
$string['newenddatedesc'] = 'Choose a new end date for the course below which will then be updated in Turnitin.';
$string['close'] = 'Close';
$string['errors'] = 'Errors';
$string['setinstructordefaults'] = 'Set these values as assignment defaults';
$string['setinstructordefaults_help'] = 'These settings will be used for any new instances of the Moodle Direct Turnitin Assignment created by you. They will supercede the defaults specified by your system administrator and are unique to you.';
$string['messagesinbox'] = 'Turnitin Messages Inbox';
$string['downloadgrademarkzip'] = 'Download Selected GradeMark Files';
$string['downloadorigfileszip'] = 'Download Original Files';
$string['uploadingsubtoturnitin'] = 'Uploading your submission to Turnitin';
$string['emptycreatedfile'] = 'The file you have attempted to submit is either empty or corrupt';
$string['studentdataprivacy'] = 'Student Data Privacy Settings';
$string['studentdataprivacy_desc'] = 'The following settings can be configured to ensure that student&#39;s personal data is not transmitted to Turnitin via the API.';
$string['enablepseudo'] = 'Enable Student Privacy';
$string['enablepseudo_desc'] = 'If this option is selected student email addresses will be transformed into a pseudo equivalent for Turnitin API calls.<br /><i>(<b>Note:</b> This option can not be changed if any Moodle user data has already been synced with Turnitin)</i>';
$string['pseudofirstname'] = 'Student Pseudo First Name';
$string['pseudofirstname_desc'] = '<b>[Optional]</b><br />The student first name to display in the Turnitin document viewer';
$string['pseudolastname'] = 'Student Pseudo Last Name';
$string['pseudolastname_desc'] = 'The student last name to display in the Turnitin document viewer';
$string['pseudolastnamegen'] = 'Auto Generate Lastname';
$string['pseudolastnamegen_desc'] = 'If set to yes and the pseudo lastname is set to a user profile field, then the field will be automatically populated with a unique identifier.';
$string['pseudoemailsalt'] = 'Pseudo Encryption Salt';
$string['pseudoemailsalt_desc'] = '<b>[Optional]</b><br />An optional salt to increase the complexity of the generated Pseudo Student email address.<br />(<b>Note:</b> The salt should remain unchanged in order to maintain consistent pseudo email addresses)';
$string['pseudoemaildomain'] = 'Pseudo Email Domain';
$string['pseudoemaildomain_desc'] = '<b>[Optional]</b><br />An optional domain for pseudo email addresses. (Defaults to @tiimoodle.com if left empty)';
$string['pseudoemailaddress'] = 'Pseudo Email Address';
$string['instructor'] = 'Instructor';
$string['files'] = 'Files';
$string['filedeleteconfirm'] = 'Are you sure you want to delete this file? This action cannot be undone.';
$string['filebrowser'] = 'Moodle Direct File Browser';
$string['deletable'] = 'Deletable';
$string['inactive'] = 'Inactive';
$string['created'] = 'Created';
$string['filename'] = 'Filename';
$string['user'] = 'User';
$string['sprevious'] = 'Prev';
$string['snext'] = 'Next';
$string['semptytable'] = 'No results found.';
$string['slengthmenu'] = 'Show _MENU_ Entries';
$string['ssearch'] = 'Search:';
$string['sprocessing'] = 'Loading data from Turnitin...';
$string['szerorecords'] = 'No records to display.';
$string['sinfo'] = 'Showing _START_ to _END_ of _TOTAL_ entries.';
$string['unlinkedusers'] = 'Unlinked Users';
$string['modulename_help'] = 'Creates a Turnitin Moodle Direct assignment which links an activity in Moodle to an assignment / assignments on Turnitin. Once linked, the activity allows instructors to assess and provide feedback for student&#39;s written work using the assessment tools available within Turnitin&#39;s Document Viewer.';
$string['transmatch'] = 'Translated Matching';
$string['transmatch_desc'] = 'Determines whether Translated Matching will be available as a setting on the assignment set up screen.<br /><i>(Enable this option only if Translated Matching is enabled on your Turnitin account)</i>';
$string['turnitintooltwo:addinstance'] = 'Add Turnitin Tool Activity';
$string['copyrightagreementerror'] = 'Please check the box to indicate that you accept the agreement before submitting.';
$string['updatepart'] = 'Update Part';
$string['grademark'] = 'GradeMark';
$string['launchgrademark'] = 'GradeMark';
$string['submissiondeleted'] = 'Submission Deleted';
$string['tutoradded'] = 'Tutor has been added to the course in Turnitin';
$string['tutoraddingerror'] = 'There has been a problem adding the tutor to the course in Turnitin';
$string['tutorremoved'] = 'Tutor has been removed from the course within Turnitin';
$string['tutorremovingerror'] = 'There has been a problem removing the tutor from the course within Turnitin';
$string['noturnitinassignemnts'] = 'There are no Turnitin Assignments';
$string['notutors'] = 'There are no tutors enrolled on this class with Turnitin';
$string['settings'] = 'Settings';
$string['faultcode'] = 'Fault Code';
$string['line'] = 'Line';
$string['message'] = 'Message';
$string['code'] = 'Code';
$string['userfinderror'] = 'There was an error trying to find the user in Turnitin';
$string['userjoinerror'] = 'There was an error trying to join a user to a course in Turnitin';
$string['userremoveerror'] = 'There was an error trying to remove a user from a course in Turnitin';
$string['membercheckerror'] = 'There was an error when trying to check users that are enrolled on this course';
$string['tiiusergeterror'] = 'There was an error when trying to get the user details from Turnitin';
$string['createassignmenterror'] = 'There was an error trying to create the assignment in Turnitin';
$string['editassignmenterror'] = 'There was an error trying to edit the assignment in Turnitin';
$string['deleteassignmenterror'] = 'There was an error trying to delete the assignment in Turnitin';
$string['createsubmissionerror'] = 'There was an error trying to create the submission in Turnitin';
$string['updatesubmissionerror'] = 'There was an error trying to resubmit your submission to Turnitin';
$string['tiisubmissiongeterror'] = 'There was an error when trying to get a submission from Turnitin';
$string['tiisubmissionsgeterror'] = 'There was an error when trying to get submissions for this assignment from Turnitin';
$string['enrolling'] = 'Enrolling students on Turnitin';
$string['tiiassignmentgeterror'] = 'There was an error when trying to get an assignment from Turnitin';
$string['turnitinstudents'] = 'Turnitin Students';
$string['turnitinstudentsremove'] = 'Are you sure you want to remove this student from the course within Turnitin?';
$string['studentremoved'] = 'Student has been removed from the course within Turnitin';
$string['studentremovingerror'] = 'There has been a problem removing the student from the course within Turnitin';
$string['turnitinstudents_desc'] = 'The selected Users below are enrolled on this Turnitin Class. Enrolled students can gain access to this class by logging in to the Turnitin web site.';
$string['coursebrowserdesc'] = 'You can search Turnitin for classes to recreate on Moodle as a course below';
$string['courseexistsmoodle'] = 'This class currently exists in Moodle as:';
$string['coursetitle'] = 'Course Title';
$string['coursetitleerror'] = 'You must provide a class title to search for';
$string['createmoodlecourses'] = 'Recreate Courses';
$string['createmoodleassignments'] = 'Recreate all Assignments of selected classes in Moodle?';
$string['recreatemulticlasses'] = 'Your selected classes are now being re-created, depending on how many you have selected this may take upto a few minutes';
$string['recreatemulticlassescomplete'] = 'Class re-creation is now complete. {$a->completed} out of {$a->total} were successfully created.';
$string['createcourse'] = 'Create New Moodle Course';
$string['linkcourse'] = 'Link Course to existing Moodle Course';
$string['selectcourse'] = 'Select Moodle Course';
$string['defaultcoursetiititle'] = 'Course from Turnitin';
$string['or'] = 'Or';
$string['downloadassignment'] = 'Download Assignment to Moodle';
$string['assignmenttitle'] = 'New Assignment Title';
$string['defaultassignmenttiititle'] = 'Assignment from Turnitin';
$string['revealdesc'] = 'Please give a reason below for unmasking a students name.';
$string['noreason'] = 'No reason specified';
$string['unanonymiseerror'] = 'There was an error when attempting to reveal the name of a student';
$string['digitalreceipt'] = 'Digital Receipt';
$string['viewdigitalreceipt'] = 'View Digital Receipt';
$string['noscript'] = 'Turnitin requires Javascript but your browser does not have it enabled. Please enable Javascript in your browser to enable you to use the full functionality of Turnitin.';
$string['noscriptsummary'] = 'Turnitin requires Javascript but your browser does not have it enabled. You will not be able to access Turnitin without it enabled.';
$string['noscriptula'] = '(As you do not have javascript enabled you will have to manually refresh this page before you can make a submission after accepting the Turnitin User Agreement)';
$string['showsummary'] = 'Show assignment summary';
$string['hidesummary'] = 'Hide assignment summary';
// START UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['marksavailable'] = 'Grades Available';
// END UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['deletepart'] = 'Delete Part';
$string['partdeleted'] = 'Assignment Part has been deleted';
$string['turnitin'] = 'Turnitin';
$string['coursebrowserassignmentdesc'] = 'In the table below you can select up to 5 assignments to create as parts of a replicated Turnitin assignment in Moodle.';
$string['turnitinoroptions'] = 'Originality Report Options';
$string['turnitingmoptions'] = 'GradeMark Options';
$string['attachrubric'] = 'Attach a rubric to this assignment';
$string['norubric'] = 'No rubric';
$string['otherrubric'] = 'Use rubric belonging to other instructor';
$string['attachrubricnote'] = 'Note: students will be able to view attached rubrics and their content prior to submitting.';
$string['changerubricwarning'] = 'Changing or detaching a rubric will remove all existing rubric scoring from papers in this assignment, including scorecards which have previously been marked. Overall grades for previously graded papers will remain.';
$string['launchrubricmanager'] = 'Launch Rubric Manager';
// START UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['launchrubricview'] = 'View the Rubric used for grading';
$string['launchrubricviewshort'] = 'Grading Rubric';
// END UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['launchquickmarkmanager'] = 'Launch Quickmark Manager';
$string['launchpeermarkmanager'] = 'Launch Peermark Manager';
$string['launchpeermarkreviews'] = 'Launch Peermark Reviews';
$string['peermark'] = 'Peermark';
$string['peermarkassignments'] = 'Peermark Assignments';
$string['showpeermark'] = 'Show Peermark Assignments';
$string['hidepeermark'] = 'Hide Peermark Assignments';
$string['noofreviewsrequired'] = 'No. of Reviews Required';
$string['showpeermarkinstructions'] = 'Show Peermark Instructions';
$string['hidepeermarkinstructions'] = 'Hide Peermark Instructions';
$string['turnitinenablepeermark'] = 'Enable Peermark Assignments';
$string['turnitinenablepeermark_desc'] = 'Choose whether to allow the creation of Peermark Assignments<br/><i>(This is only available to those that have Peermark configured for their account)</i>';
$string['nonenrolledstudent'] = 'Non Enrolled Student';
$string['startdatenotyearago'] = 'Start date can not be more than 1 year ago';
$string['searchcourses'] = 'Search Courses';
$string['errorsdesc'] = 'There has been a problem in trying to upload the following files to Turnitin.';
$string['tiiexplain'] = 'Turnitin is a commercial product and you must have a paid subscription to use this service for more information see <a href=http://docs.moodle.org/en/Turnitin_administration>http://docs.moodle.org/en/Turnitin_administration</a>';
$string['useturnitin'] = 'Enable Turnitin';
$string['turnitinconfig'] = 'Turnitin Plagiarism Plugin Configuration';
$string['studentdisclosuredefault'] = 'All files uploaded will be submitted to the plagiarism detection service Turnitin.com';
$string['studentdisclosure'] = 'Student Disclosure';
$string['studentdisclosure_help'] = 'This text will be displayed to all students on the file upload page.';
$string['settingsinserterror'] = 'There was an error when trying to insert a setting into the database';
$string['settingsupdateerror'] = 'There was an error when trying to update a setting in the database';
$string['config'] = 'Configuration';
$string['configupdated'] = 'Configuration updated';
$string['turnitindefaults'] = 'Turnitin plagiarism plugin default settings';
$string['turnitinpluginsettings'] = 'Turnitin plagiarism plugin settings';
$string['defaultsdesc'] = 'The following settings are the defaults set when enabling Turnitin within an Activity Module';
$string['compareinstitution'] = 'Compare submitted files with papers submitted within this institution';
$string['defaultinserterror'] = 'There was an error when trying to insert a default setting value into the database';
$string['defaultupdateerror'] = 'There was an error when trying to update a default setting value in the database';
$string['defaultupdated'] = 'Turnitin defaults updated';
$string['pp_createsubmissionerror'] = 'There was an error in the plagiarism plugin when creating a submission';
$string['pp_updatesubmissionerror'] = 'There was an error in the plagiarism plugin when updating a submission';
$string['coursestomigrate'] = 'You have {$a} classes available to restore from Turnitin';
$string['gradingtemplate'] = 'Grading Template';
$string['allownonor'] = 'Allow submission of any file type?';
$string['allownonor_help'] = 'This setting will allow any file type to be submitted. With this option set to &#34;Yes&#34;, submissions will be checked for originality where possible, submissions will be available for download and GradeMark feedback tools will be available where possible.';
$string['submitnothing'] = 'Enable grading for this student without submission';
$string['submitnothingwarning'] = 'Clicking on the gray pen for a student who hasn&#39;t submitted a file creates a grading template, which will allow you to give the student GradeMark feedback for the assignment. A grading template takes the place of a submission and will prevent the student from submitting to assignments where resubmission is not allowed.<br><br>Are you sure you want to grade without a submission?';
$string['draftsubmit'] = 'When should the file be submitted to Turnitin?';
$string['submitondraft'] = 'Submit file when first uploaded';
// START UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['submitonfinal'] = 'Submit file when student sends for grading';
// END UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['turnitindiagnostic'] = 'Enable Diagnostic Mode';
$string['turnitindiagnostic_desc'] = '<b>[Caution]</b><br />Enable Diagnostic mode only to track down problems with the Turnitin API.';
$string['autorefreshgrades'] = 'Auto Refresh Grades / Scores';
$string['autorefreshgrades_help'] = 'By default after each call to Turnitin the Moodle integration plug in will attempt to automatically pull down changes made while in within Turnitin. You can use this option to turn off this feature, however in order to maintain synchronisation between both systems you will need to frequently manually refresh grades and originality scores from within Moodle.';
$string['yesgrades'] = 'Yes, automatically refresh originality scores and grades';
$string['nogrades'] = 'No, I will refresh originality scores and grades manually';
$string['submissionagreementerror'] = 'You must accept the agreement for this submission';
$string['noxmlwriterlibrary'] = 'To use this plugin you will need to have the PHP XMLWriter extension installed on your server.';
$string['checkupgrade'] = 'Check for available upgrade';
$string['checkingupgrade'] = 'Checking for available upgrade';
$string['usinglatest'] = 'You are using the latest version!';
$string['useturnitin_mod'] = 'Enable Turnitin for {$a}';
$string['notorcapable'] = 'It is not possible to produce an Originality Report for this file.';
$string['redirecttoeula'] = 'We are redirecting you to the End User Licence Agreement';
$string['filedoesnotexist'] = 'File has been deleted';
$string['eventremoved'] = 'This event has been removed the cron queue and will not be processed again.';
$string['partnametoolarge'] = 'The part name is too large. Please limit to 40 characters.';
$string['enableperformancelogs'] = 'Enable Network Performance Logging';
$string['enableperformancelogs_desc'] = 'If enabled, each request to the Turnitin server will be logged in {tempdir}/turnitintooltwo/logs';
$string['listsubmissions'] = 'List Submissions';
$string['viewsubmission'] = 'View Submission';
$string['listsubmissionsdesc'] = 'User viewed the list of submissions at course';
$string['viewsubmissiondesc'] = 'User viewed submission';
$string['addsubmissiondesc'] = 'User added submission';
$string['deletesubmissiondesc'] = 'User deleted the submission';
$string['turnitinrepositoryoptions'] = 'Paper Repository Assignments';
$string['turnitinrepositoryoptions_desc'] = 'Choose the repository options for Turnitin Assignments.<br /><i>(An Institutional Repository is only available to those that have this enabled for their account)</i>';
$string['turnitinrepositoryoptions_help'] = 'Use this setting to change the repository options available on the assignment set up screen.<br /><i>(An Institutional Repository is only available to those that have this enabled for their account)</i>';
$string['repositoryoptions_0'] = 'Enable instructor standard repository options';
$string['repositoryoptions_1'] = 'Enable instructor expanded repository options';
$string['repositoryoptions_2'] = 'Submit all papers to the standard repository';
$string['repositoryoptions_3'] = 'Do not submit any papers into a repository';
$string['turnitinula_btn'] = 'Please click here to read and accept the Agreement.';
$string['turnitinula'] = 'You must accept the latest Turnitin User Agreement before you can make a submission.';
$string['upgradenotavailable'] = 'No Upgrade Available';
$string['turnitintoolofflineerror'] = 'We are experiencing a temporary problem. Please try again shortly.';
$string['offlinestatus'] = 'Turnitin has been set to offline. (The variable $CFG->tiioffline has been set to true.)';
// START UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['disableanonconfirm'] = 'Doing this will permanently disable anonymous grading on this assignment. Are you sure?';
// END UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['uniquepartname'] = 'Part name must be unique';
$string['closebutton'] = 'Close';
// START UCLA MOD: CCLE-6469-rename-generate-report.
//$string['reportgenspeed_help'] = 'There are three options for this assignment setting: &#39;Generate reports immediately (resubmissions are not allowed)&#39;, &#39;Generate reports immediately (resubmissions are allowed until due date)&#39;, and &#39;Generate reports on due date (resubmissions are allowed until due date)&#39;<br /><br />The option &#39;Generate reports immediately (resubmissions are not allowed)&#39; generates the Originality Report immediately when a student makes a submission. With this option selected your students will not be able to resubmit to the assignment.<br /><br />To allow resubmissions, select &#39;Generate reports immediately (resubmissions are allowed until due date)&#39; option. This allows students to continuously resubmit papers to the assignment until the due date. It may take up to 24 hours to process Originality Reports for resubmissions.<br /><br />The option &#39;Generate reports on due date (resubmissions are allowed until due date)&#39; will only generate an Originality Report on the assignment&#39;s due date. This setting will make it so all papers submitted to the assignment will be compared against each other when the Originality Reports are created.';
$string['reportgenspeed_help'] = 'There are three options for this assignment setting: &#39;Resubmissions disallowed&#39;, &#39;Resubmissions allowed until due date (generate reports immediately)&#39;, and &#39;Resubmissions allowed until due date (generate reports on due date)&#39;<br /><br />'
        . 'The option &#39;Resubmissions disallowed&#39; generates the Originality Report immediately when a student makes a submission. With this option selected your students will not be able to resubmit to the assignment.<br /><br />'
        . 'To allow resubmissions, select &#39;Resubmissions allowed until due date (generate reports immediately)&#39; option. This allows students to continuously resubmit papers to the assignment until the due date. It may take up to 24 hours to process Originality Reports for resubmissions.<br /><br />'
        . 'The option &#39;Resubmissions allowed until due date (generate reports on due date)&#39; will only generate an Originality Report on the assignment&#39;s due date. This setting will make it so all papers submitted to the assignment will be compared against each other when the Originality Reports are created.';
// END UCLA MOD: CCLE-6469-rename-generate-report.
$string['submissiondate'] = 'Submission Date';
$string['receiptassignmenttitle'] = 'Assignment Title';
$string['refid'] = 'Ref. ID';
$string['turnitinpaperid'] = 'Turnitin Paper ID';
$string['submissionauthor'] = 'Submission Author';
$string['receiptparagraph'] = 'This receipt acknowledges that Turnitin received your paper. Below you will find the receipt information regarding your submission.';
$string['objectid'] = 'Turnitin Paper ID';
$string['anonalert'] = 'Your post date is before your current time, this will permanently disable anonymous marking for this assignment if you save this.';
$string['turnitinapiurl_desc'] = '<b>[Required]</b><br />Select a Turnitin API URL';
$string['tii_submission_failure'] = 'Please consult your tutor or Moodle administrator for further details';
$string['turnitinrefreshingsubmissions'] = 'Refreshing Submissions';
$string['turnitinanon_help'] = 'You can configure your Turnitin assignment to use Anonymous Marking by setting this value to Yes. Once a submission is made anonymous marking cannot be disabled.';
$string['digital_receipt_subject'] = 'This is your Turnitin Digital Receipt';
$string['digital_receipt_message'] = 'Dear {$a->firstname} {$a->lastname},<br /><br />You have successfully submitted the file <strong>{$a->submission_title}</strong> to the assignment <strong>{$a->assignment_name}{$a->assignment_part}</strong> in the class <strong>{$a->course_fullname}</strong> on <strong>{$a->submission_date}</strong>. Your submission id is <strong>{$a->submission_id}</strong>. Your full digital receipt can be viewed and printed from the assignment inbox or from the print/download button in the document viewer.<br /><br />Thank you for using Turnitin,<br /><br />The Turnitin Team';
$string['messageprovider:submission'] = 'Turnitin Assignment Digital Receipt notifications';
$string['errorenrollingall'] = 'There has been an error enrolling all students on Turnitin - Please consult your system administrator';
$string['ppassignmentcreateerror'] = 'This module could not be created on Turnitin, please consult your API logs for further information';
$string['pp_classcreationerror'] = 'This class could not be created on Turnitin, please consult your API logs for further information';
$string['pp_submission_error'] = 'Turnitin has returned an error with your submission:';
$string['turnitinppulapre'] = 'To submit a file to Turnitin you must first accept our EULA. Choosing to not accept our EULA will submit your file to Moodle only. Click here to accept.';
$string['turnitinppulapost'] = 'Your file has not been submitted to Turnitin. Please click here to accept our EULA.';
$string['listsubmissionsdesc_student'] = 'User viewed their submission inbox at course';
$string['gradenosubmission'] = 'User enabled grading without a submission for the user with id';
$string['turnitinstatus'] = 'Turnitin status';
$string['resubmittoturnitin'] = 'Resubmit to Turnitin';
$string['resubmitting'] = 'Resubmitting';
$string['addresubmissiontiidesc'] = 'User resubmission sent to Turnitin';
$string['addsubmissiontiidesc'] = 'User submission sent to Turnitin';
$string['deletesubmissiontiidesc'] = 'User deleted the submission from Turnitin';
$string['download'] = 'Download';
$string['grademarkzip'] = 'Selected GradeMark Files';
$string['origfileszip'] = 'Original Files';
$string['sharedrubric'] = 'Shared Rubric';
$string['resubmitselected'] = 'Resubmit Selected Files';
$string['turnitininboxlayout'] = 'Assignment Page Layout';
$string['turnitininboxlayout_desc'] = 'Choose whether the Turnitin Assignment page should show navigation or be displayed full width.';
$string['layoutoptions_0'] = 'Full width';
$string['layoutoptions_1'] = 'Moodle default - with navigation';
$string['messagenonsubmitters'] = 'Notify Non-Submitters';
$string['nonsubmittersformdesc'] = 'Please enter a message below to send to students who have not yet submitted to this assignment.';
$string['nonsubmitterssubject'] = 'Subject';
$string['nonsubmittersmessage'] = 'Message';
$string['nonsubmitterssendtoself'] = 'Send a copy of this message to me';
$string['nonsubmitterssubmit'] = 'Send email';
$string['nonsubmitterserror'] = 'Please provide a subject and message for the email';
$string['nonsubmitterssubjecterror'] = 'Please provide a subject for the email';
$string['nonsubmittersmessageerror'] = 'Please provide a message for the email';
$string['nonsubmittersformsuccess'] = 'Your message to non-submitters has been sent.';
$string['messageprovider:nonsubmitters'] = 'Turnitin Assignment Non Submitter notifications';
$string['checkagainstnote'] = 'Note: If you do not select "Yes" for at least one of the "Check against..." options below then an Originality report will NOT be generated.';
// START UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['anonblindmarkingnote'] = 'Note: The separate Turnitin anonymous grading setting has been removed. Turnitin will use Moodle\'s blind grading setting to determine the anonymous grading setting.';
// END UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['displaygradesas'] = 'Grade Display';
$string['displaygradesas_help'] = 'This option sets the display mode for grades the options are display as a percentage or display as a fraction ie 45/60.';
$string['displaygradesasfraction'] = 'Show grades as Fraction (e.g. 89/100)';
$string['displaygradesaspercent'] = 'Show grades as Percentage (e.g. 89&#37;)';
$string['genspeednote'] = 'Note: Originality Report generation for resubmissions is subject to a twenty-four hour delay.';
$string['cronsubmittedsuccessfully'] = 'Submission: {$a->title} (TII ID: {$a->submissionid}) for the assignment {$a->assignmentname} on the course {$a->coursename} was successfully submitted to Turnitin.';
$string['ppassignmentediterror'] = 'Module {$a->title} (TII ID: {$a->assignmentid}) could not be edited on Turnitin, please consult your API logs for further information';
$string['nombstringlibrary'] = 'To use this plugin you will need to have the PHP mbstring extension installed on your server.';
$string['receipt_instructor_copy'] = 'A submission entitled <strong>{$a->submission_title}</strong> has been made to assignment <strong>{$a->assignment_name}{$a->assignment_part}</strong> in the class <strong>{$a->course_fullname}</strong>.<br /><br />Submission ID: <strong>{$a->submission_id}</strong><br />Submission Date: <strong>{$a->submission_date}</strong><br />';
$string['receipt_instructor_copy_subject'] = 'Submission made to assignment';
$string['instructorreceipt'] = 'Notify Instructor upon Submission';
$string['instructorreceipt_desc'] = 'Choose whether to send a notification to each instructor on a course when a submission is made to an assignment.';
$string['loadingdv'] = 'Loading Turnitin Document Viewer...';
$string['messageprovider:notify_instructor_of_submission'] = 'Turnitin Assignment Instructor Digital Receipt notifications';
$string['postdate_warning'] = 'Please be aware that changing the assignment dates may affect when grades are visible to the student and when the student\'s identities are revealed to instructors.';
$string['task_name'] = 'Turnitintooltwo Cron Task';
$string['crontaskmodeactive'] = 'Turnitintooltwo - Aborted Cron call because of active task mode';
$string['restorationheader'] = 'Turnitin Class Restoration';
$string['turnitinhelpdesk'] = 'Turnitin Helpdesk';
$string['helpdesklink'] = 'Need Help with Turnitin?';
$string['turnitinsettingshelpwizard'] = 'Enable Turnitin helpdesk for Instructors';
$string['turnitinsettingshelpwizard_desc'] = 'Choose whether instructors are able to access the Turnitin helpdesk wizard from within Moodle.';
$string['tiiaccountconfig'] = 'Turnitin Account Configuration';
$string['tiiaccountsettings'] = 'Turnitin Account Settings';
$string['tiiaccountsettings_desc'] = 'Please ensure these settings match those configured in your Turnitin account, otherwise you may experience issues with assignment creation and/or student submissions.';
$string['tiimiscsettings'] = 'Miscellaneous Plugin Settings';
$string['tiidebugginglogs'] = 'Debugging and Logging';
$string['diagnosticoptions_0'] = 'Off';
$string['diagnosticoptions_1'] = 'Standard';
$string['diagnosticoptions_2'] = 'Debugging';
$string['nofinfolibrary'] = 'To use this plugin you will need to have the PHP Fileinfo extension installed on your server.';
$string['nosoaplibrary'] = 'To use this plugin you will need to have the PHP SOAP extension installed on your server.';
$string['refreshallgrades'] = 'Refresh all Grades from Turnitin';
$string['refreshingallgrades'] = 'Refreshing Grades from Turnitin';
$string['studentfirstname'] = 'First Name';
$string['studentlastname'] = 'Last Name';
// START UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
$string['assignmentdefault'] = 'Assignment defaults';
// END UCLA MOD: CCLE-5751-Fix-turnitinV2-assignment-label-and-grading-text.
// START UCLA MOD: CCLE-5756-add-tooltip-to-export-option.
$string['exportexcel'] = 'Export to Excel';
$string['exportpdf'] = 'Export to PDF';
$string['exportoriginal'] = 'Export to original format';
// END UCLA MOD: CCLE-5756-add-tooltip-to-export-option.
// START UCLA MOD: CCLE-6410 - Pencil icon tooltip
$string['edit'] = 'Edit';
// END UCLA MOD: CCLE-6410
// START UCLA MOD: CCLE-6375 - Course identifier in email notification.
$string['emailnonsubmitters'] = 'Email non-submitters';
// START UCLA MOD: CCLE-6375.
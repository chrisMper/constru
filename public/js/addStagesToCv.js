function addStage() {
    var stagesContainer = document.getElementById("stages-container");
    var newStage = document.createElement("div");
    newStage.className = "stage";
    var stageNumber = stagesContainer.children.length + 1;
    newStage.innerHTML = '<span>Skill ' + stageNumber + '</span>' +
                         '<input id="skill" type="text" name="skill[]" placeholder="Enter skill here">' +
                         '<span>Indicate your skill as a percentage</span>' +
                            '<select id="Presentages" name="presentages[]" placeholder="Enter presentage of your skill">'+
                                '<option value="10">10% </option>'+
                                '<option value="20">20% </option>'+
                                '<option value="30">30% </option>'+
                                '<option value="40">40% </option>'+
                                '<option value="50">50% </option>'+
                                '<option value="60">60% </option>'+
                                '<option value="70">70% </option>'+
                                '<option value="80">80% </option>'+
                                '<option value="90">90% </option>'+
                                '<option value="100">100% </option>'+
                            '</select><br />'+
							'<button type="button" class="delete-stage-btn" onclick="deleteStage(this)">Delete</button>';

                         
                            


    stagesContainer.appendChild(newStage);
}

function addEducation() {
    var stagesContainer = document.getElementById("education-container");
    var newStage = document.createElement("div");
    newStage.className = "stage";
    var stageNumber = stagesContainer.children.length + 1;
    newStage.innerHTML = '<span>Education qualification ' + stageNumber + '</span>' +
                         '<input id="education" type="text" name="education[]" placeholder="Enter education qualification here">' +
                         '<span>Start year</span>' +
                            '<select id="StartE" name="StartE[]">'+ 
                            '<option value="1980" >1980 </option>'+
                            '<option value="1981" >1981 </option>'+
                            '<option value="1982" >1982 </option>'+
                            '<option value="1983" >1983 </option>'+
                            '<option value="1984" >1984 </option>'+
                            '<option value="1985" >1985 </option>'+
                            '<option value="1986" >1986 </option>'+
                            '<option value="1987" >1987 </option>'+
                            '<option value="1988" >1988 </option>'+
                            '<option value="1989" >1989 </option>'+
                            '<option value="1990" >1990 </option>'+
                            '<option value="1991" >1991 </option>'+
                            '<option value="1992" >1992 </option>'+
                            '<option value="1993" >1993 </option>'+
                            '<option value="1994" >1994 </option>'+
                            '<option value="1995" >1995 </option>'+
                            '<option value="1996" >1996 </option>'+
                            '<option value="1997" >1997 </option>'+
                            '<option value="1998" >1998 </option>'+
                            '<option value="1999" >1999 </option>'+
                            '<option value="2000" >2000 </option>'+
                            '<option value="2001" >2001 </option>'+
                            '<option value="2002" >2002 </option>'+
                            '<option value="2003" >2003 </option>'+
                            '<option value="2004" >2004 </option>'+
                            '<option value="2005" >2005 </option>'+
                            '<option value="2006" >2006 </option>'+
                            '<option value="2007" >2007 </option>'+
                            '<option value="2008" >2008 </option>'+
                            '<option value="2009" >2009 </option>'+
                            '<option value="2010" >2010 </option>'+
                            '<option value="2011" >2011 </option>'+
                            '<option value="2012" >2012 </option>'+
                            '<option value="2013" >2013 </option>'+
                            '<option value="2014" >2014 </option>'+
                            '<option value="2015" >2015 </option>'+
                            '<option value="2016" >2016 </option>'+
                            '<option value="2017" >2017 </option>'+
                            '<option value="2018" >2018 </option>'+
                            '<option value="2019" >2019 </option>'+
                            '<option value="2020" >2020 </option>'+
                            '<option value="2021" >2021 </option>'+
                            '<option value="2022" >2022 </option>'+
                            '<option value="2023" >2023 </option>'+
                            '</select>'+
                            '<span>End year</span>'+
                            '<select id="EndE" name="EndE[]">'+
                            '<option value="1981" >1981 </option>'+
                            '<option value="1982" >1982 </option>'+
                            '<option value="1983" >1983 </option>'+
                            '<option value="1984" >1984 </option>'+
                            '<option value="1985" >1985 </option>'+
                            '<option value="1986" >1986 </option>'+
                            '<option value="1987" >1987 </option>'+
                            '<option value="1988" >1988 </option>'+
                            '<option value="1989" >1989 </option>'+
                            '<option value="1990" >1990 </option>'+
                            '<option value="1991" >1991 </option>'+
                            '<option value="1992" >1992 </option>'+
                            '<option value="1993" >1993 </option>'+
                            '<option value="1994" >1994 </option>'+
                            '<option value="1995" >1995 </option>'+
                            '<option value="1996" >1996 </option>'+
                            '<option value="1997" >1997 </option>'+
                            '<option value="1998" >1998 </option>'+
                            '<option value="1999" >1999 </option>'+
                            '<option value="2000" >2000 </option>'+
                            '<option value="2001" >2001 </option>'+
                            '<option value="2002" >2002 </option>'+
                            '<option value="2003" >2003 </option>'+
                            '<option value="2004" >2004 </option>'+
                            '<option value="2005" >2005 </option>'+
                            '<option value="2006" >2006 </option>'+
                            '<option value="2007" >2007 </option>'+
                            '<option value="2008" >2008 </option>'+
                            '<option value="2009" >2009 </option>'+
                            '<option value="2010" >2010 </option>'+
                            '<option value="2011" >2011 </option>'+
                            '<option value="2012" >2012 </option>'+
                            '<option value="2013" >2013 </option>'+
                            '<option value="2014" >2014 </option>'+
                            '<option value="2015" >2015 </option>'+
                            '<option value="2016" >2016 </option>'+
                            '<option value="2017" >2017 </option>'+
                            '<option value="2018" >2018 </option>'+
                            '<option value="2019" >2019 </option>'+
                            '<option value="2020" >2020 </option>'+
                            '<option value="2021" >2021 </option>'+
                            '<option value="2022" >2022 </option>'+
                            '<option value="2023" >2023 </option>'+
                            '</select><br />'+
							'<button type="button" class="delete-stage-btn" onclick="deleteStage(this)">Delete</button>';

    stagesContainer.appendChild(newStage);
}

function addExperience() {
    var stagesContainer = document.getElementById("experience-container");
    var newStage = document.createElement("div");
    newStage.className = "stage";
    var stageNumber = stagesContainer.children.length + 1;
    newStage.innerHTML = '<span>Experience ' + stageNumber + '</span>' +
                         '<input id="education" type="text" name="experience[]" placeholder="Enter experience ">' +
                         '<span>Start year</span>' +
                            '<select id="Start[]" name="Start[]">'+ 
                            '<option value="1980" >1980 </option>'+
                            '<option value="1981" >1981 </option>'+
                            '<option value="1982" >1982 </option>'+
                            '<option value="1983" >1983 </option>'+
                            '<option value="1984" >1984 </option>'+
                            '<option value="1985" >1985 </option>'+
                            '<option value="1986" >1986 </option>'+
                            '<option value="1987" >1987 </option>'+
                            '<option value="1988" >1988 </option>'+
                            '<option value="1989" >1989 </option>'+
                            '<option value="1990" >1990 </option>'+
                            '<option value="1991" >1991 </option>'+
                            '<option value="1992" >1992 </option>'+
                            '<option value="1993" >1993 </option>'+
                            '<option value="1994" >1994 </option>'+
                            '<option value="1995" >1995 </option>'+
                            '<option value="1996" >1996 </option>'+
                            '<option value="1997" >1997 </option>'+
                            '<option value="1998" >1998 </option>'+
                            '<option value="1999" >1999 </option>'+
                            '<option value="2000" >2000 </option>'+
                            '<option value="2001" >2001 </option>'+
                            '<option value="2002" >2002 </option>'+
                            '<option value="2003" >2003 </option>'+
                            '<option value="2004" >2004 </option>'+
                            '<option value="2005" >2005 </option>'+
                            '<option value="2006" >2006 </option>'+
                            '<option value="2007" >2007 </option>'+
                            '<option value="2008" >2008 </option>'+
                            '<option value="2009" >2009 </option>'+
                            '<option value="2010" >2010 </option>'+
                            '<option value="2011" >2011 </option>'+
                            '<option value="2012" >2012 </option>'+
                            '<option value="2013" >2013 </option>'+
                            '<option value="2014" >2014 </option>'+
                            '<option value="2015" >2015 </option>'+
                            '<option value="2016" >2016 </option>'+
                            '<option value="2017" >2017 </option>'+
                            '<option value="2018" >2018 </option>'+
                            '<option value="2019" >2019 </option>'+
                            '<option value="2020" >2020 </option>'+
                            '<option value="2021" >2021 </option>'+
                            '<option value="2022" >2022 </option>'+
                            '<option value="2023" >2023 </option>'+
                            '</select>'+
                            '<span>End year</span>'+
                            '<select id="End[]" name="End[]">'+
                            '<option value="1980" >1980 </option>'+
                            '<option value="1981" >1981 </option>'+
                            '<option value="1982" >1982 </option>'+
                            '<option value="1983" >1983 </option>'+
                            '<option value="1984" >1984 </option>'+
                            '<option value="1985" >1985 </option>'+
                            '<option value="1986" >1986 </option>'+
                            '<option value="1987" >1987 </option>'+
                            '<option value="1988" >1988 </option>'+
                            '<option value="1989" >1989 </option>'+
                            '<option value="1990" >1990 </option>'+
                            '<option value="1991" >1991 </option>'+
                            '<option value="1992" >1992 </option>'+
                            '<option value="1993" >1993 </option>'+
                            '<option value="1994" >1994 </option>'+
                            '<option value="1995" >1995 </option>'+
                            '<option value="1996" >1996 </option>'+
                            '<option value="1997" >1997 </option>'+
                            '<option value="1998" >1998 </option>'+
                            '<option value="1999" >1999 </option>'+
                            '<option value="2000" >2000 </option>'+
                            '<option value="2001" >2001 </option>'+
                            '<option value="2002" >2002 </option>'+
                            '<option value="2003" >2003 </option>'+
                            '<option value="2004" >2004 </option>'+
                            '<option value="2005" >2005 </option>'+
                            '<option value="2006" >2006 </option>'+
                            '<option value="2007" >2007 </option>'+
                            '<option value="2008" >2008 </option>'+
                            '<option value="2009" >2009 </option>'+
                            '<option value="2010" >2010 </option>'+
                            '<option value="2011" >2011 </option>'+
                            '<option value="2012" >2012 </option>'+
                            '<option value="2013" >2013 </option>'+
                            '<option value="2014" >2014 </option>'+
                            '<option value="2015" >2015 </option>'+
                            '<option value="2016" >2016 </option>'+
                            '<option value="2017" >2017 </option>'+
                            '<option value="2018" >2018 </option>'+
                            '<option value="2019" >2019 </option>'+
                            '<option value="2020" >2020 </option>'+
                            '<option value="2021" >2021 </option>'+
                            '<option value="2022" >2022 </option>'+
                            '<option value="2023" >2023 </option>'+
                            '</select><br />'+
							'<button type="button" class="delete-stage-btn" onclick="deleteStage(this)">Delete</button>';

    stagesContainer.appendChild(newStage);
}


function deleteStage(button) {
    var stageDiv = button.parentNode;
    stageDiv.parentNode.removeChild(stageDiv);
    var stagesContainer = document.getElementById("stages-container");
    var stageNumberSpans = stagesContainer.getElementsByTagName("span");
    for (var i = 0; i < stageNumberSpans.length; i++) {
        stageNumberSpans[i].innerHTML = "Stage " + (i + 1);
    }
}


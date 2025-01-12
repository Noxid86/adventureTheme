<?php
/**
 * Title: Call-to-action with text, button
 * Slug: adventureTheme/adventure
 * Categories: call-to-action
 * Keywords: button, adventure, cta
 */
?>

<div id="AdventureContainer" class="Fullscreen">
    <div id="AdventureWindow">
        <div class="output">
            
        </div>
        <div class="toolbar">
            <div class="look icon">
                <svg viewBox="0 0 25 25">
                    <path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" d="M15 10.5C15 12.9853 12.9853 15 10.5 15C8.01472 15 6 12.9853 6 10.5C6 8.01472 8.01472 6 10.5 6C12.9853 6 15 8.01472 15 10.5ZM14.1793 15.2399C13.1632 16.0297 11.8865 16.5 10.5 16.5C7.18629 16.5 4.5 13.8137 4.5 10.5C4.5 7.18629 7.18629 4.5 10.5 4.5C13.8137 4.5 16.5 7.18629 16.5 10.5C16.5 11.8865 16.0297 13.1632 15.2399 14.1792L20.0304 18.9697L18.9697 20.0303L14.1793 15.2399Z"/>
                </svg>
            </div>
            <div class="touch icon">
                <svg viewBox="-3 -3 40 40">
                    <path xmlns="http://www.w3.org/2000/svg" d="M31 8.5c0 0-2.53 5.333-3.215 8.062-0.896 3.57 0.13 6.268-1.172 9.73-2.25 4.060-2.402 4.717-10.613 4.708-3.009-0.003-11.626-2.297-11.626-2.297-1.188-0.305-3.373-0.125-3.373-1.453s1.554-2.296 2.936-2.3l5.439 0.478c1.322-0.083 2.705-0.856 2.747-2.585-0.022-2.558-0.275-4.522-1.573-6.6l-5.042-7.867c-0.301-0.626-0.373-1.694 0.499-2.171s1.862 0.232 2.2 0.849l5.631 7.66c0.602 0.559 1.671 0.667 1.58-0.524l-2.487-11.401c-0.155-0.81 0.256-1.791 1.194-1.791 1.231 0 1.987 0.47 1.963 1.213l2.734 11.249c0.214 0.547 0.972 0.475 1.176-0.031l0.779-10.939c0.040-0.349 0.495-0.957 1.369-0.831s1.377 1.063 1.285 1.424l-0.253 10.809c0.177 0.958 0.93 1.098 1.517 0.563l3.827-6.843c0.232-0.574 1.143-0.693 1.67-0.466 0.491 0.32 0.81 0.748 0.81 1.351v0z"/>
                </svg>
            </div>
            <div class="go icon">
                <svg viewBox="-15 -15 100 100">
                    <g>
                        <g>
                            <path d="M29.166,23.822C28.352,15.234,25.026,8.196,18.409,9.5c-4.322,0.852-7.935,6.903-9.49,15.586    c-0.883,4.945-0.067,10.661,0.962,16.108c1.23,6.519-0.495,15.575,1.451,20.901c1.583,4.334,4.084,5.684,7.077,5.773    c2.992,0.089,6.111-1.316,7.416-5.724c2.567-8.646,0.218-13.294,0.499-21.378C26.524,34.925,29.876,31.349,29.166,23.822z"/>
                            <path d="M58.954,15.743c-1.556-8.687-5.169-14.737-9.489-15.587c-6.62-1.304-9.945,5.737-10.758,14.323    c-0.712,7.524,2.64,11.1,2.843,16.949c0.28,8.08-2.067,12.729,0.497,21.379c1.307,4.402,4.425,5.811,7.418,5.721    c2.992-0.086,5.495-1.437,7.076-5.773c1.947-5.326,0.219-14.382,1.45-20.901C59.022,26.406,59.837,20.688,58.954,15.743z"/>
                        </g>
                    </g>
                </svg>
            </div>                 
        </div>
    </div>
</div>

<script>
    let room = {
        "Title": "[ The Alchemy Shop: Candid Concoctions ]",
        "Description": "The potions shop is a dimly lit room with stone <span class='interact' id='obj_001'>cool, rough walls</span> and a vaulted wooden <span class='interact' id='obj_002'>high, arched ceiling</span>. The air is thick with the <span class='interact' id='obj_003'>complex, tangible scent</span> of <span class='interact' id='obj_004'>bundles of dried, vibrant herbs</span>, <span class='interact' id='obj_005'>strange, neon chemicals</span>, and <span class='interact' id='obj_006'>thin, calming incense</span>. A circular stained-glass <span class='interact' id='obj_007'>muted, arcane window</span> casts soft <span class='interact' id='obj_008'>warm, shifting colors</span> onto the stone <span class='interact' id='obj_009'>smooth, veined floor</span>. <span class='interact' id='obj_010'>narrow, eclectic shelves</span> carved into the <span class='interact' id='obj_001'>cool, rough walls</span> hold <span class='interact' id='obj_011'>tiny, wax-sealed vials</span>, <span class='interact' id='obj_012'>round, mysterious jars</span>, and <span class='interact' id='obj_013'>tall, varied bottles</span>, some labeled, others unmarked. A wooden <span class='interact' id='obj_014'>sturdy, scorched counter</span> is cluttered with <span class='interact' id='obj_015'>ornamental, strange tools</span>, <span class='interact' id='obj_016'>yellowed, intricate scrolls</span>, and an open <span class='interact' id='obj_017'>thick, meticulous ledger</span>, while a bubbling <span class='interact' id='obj_018'>large, blackened cauldron</span> emits faint <span class='interact' id='obj_019'>graceful, rising plumes</span> of <span class='interact' id='obj_020'>warm, curling steam</span>. Dried <span class='interact' id='obj_004'>bundles of dried, vibrant herbs</span> and <span class='interact' id='obj_021'>small, inscribed talismans</span> hang from <span class='interact' id='obj_022'>thick, sturdy ceiling beams</span>, and a <span class='interact' id='obj_023'>slanted, worn rack</span> near the entrance displays <span class='interact' id='obj_024'>old, faded books</span>. The shop has two exits: a sturdy oak <span class='interact' id='obj_025'>heavy, iron-handled door (marketplace)</span> leading to the marketplace and a narrow <span class='interact' id='obj_026'>smaller, inconspicuous door (back)</span> at the back, partially hidden by hanging <span class='interact' id='obj_027'>cascading, green ivy</span>.",
        "Objects": [
            {
                "id": "obj_001",
                "name": "cool, rough walls",
                "description": "Cool, rough stone, bearing the marks of time and the occasional faint etching."
            },
            {
                "id": "obj_002",
                "name": "high, arched ceiling",
                "description": "High and arched, crafted from aged wooden beams, faintly fragrant with pine."
            },
            {
                "id": "obj_003",
                "name": "complex, tangible scent",
                "description": "A complex symphony of herbs, incense, and alchemical brews, almost tangible in the stillness."
            },
            {
                "id": "obj_004",
                "name": "bundles of dried, vibrant herbs",
                "description": "Bundles of dried leaves and flowers, some crumbling with age, others vibrant and fresh."
            },
            {
                "id": "obj_005",
                "name": "strange, neon chemicals",
                "description": "Strange substances in tiny vials, their hues ranging from bright neon to murky black."
            },
            {
                "id": "obj_006",
                "name": "thin, calming incense",
                "description": "Thin trails of smoke spiraling lazily upward, releasing a calming, spicy aroma."
            },
            {
                "id": "obj_007",
                "name": "muted, arcane window",
                "description": "A circular pane of stained glass, depicting arcane symbols in soft, muted colors."
            },
            {
                "id": "obj_008",
                "name": "warm, shifting colors",
                "description": "Warm hues of amber, green, and violet, shifting subtly as light filters through."
            },
            {
                "id": "obj_009",
                "name": "smooth, veined floor",
                "description": "Smooth stone worn down by countless footsteps, with faintly visible veins of quartz."
            },
            {
                "id": "obj_010",
                "name": "narrow, eclectic shelves",
                "description": "Narrow wooden ledges carved directly into the walls, overflowing with an eclectic assortment."
            },
            {
                "id": "obj_011",
                "name": "tiny, wax-sealed vials",
                "description": "Tiny glass containers sealed with wax, holding shimmering liquids and fine powders."
            },
            {
                "id": "obj_012",
                "name": "round, mysterious jars",
                "description": "Round glass vessels with tightly fitting lids, some revealing dried plants, others mysterious contents."
            },
            {
                "id": "obj_013",
                "name": "tall, varied bottles",
                "description": "Tall and slender or short and stout, these vessels hold brews ranging from crystal clear to opaque."
            },
            {
                "id": "obj_014",
                "name": "sturdy, scorched counter",
                "description": "A sturdy wooden slab, its surface marred by scorch marks, ink stains, and knife cuts."
            },
            {
                "id": "obj_015",
                "name": "ornamental, strange tools",
                "description": "A jumble of tongs, pestles, and strange contraptions, some looking more ornamental than practical."
            },
            {
                "id": "obj_016",
                "name": "yellowed, intricate scrolls",
                "description": "Yellowed parchments covered in intricate diagrams and faded handwriting."
            },
            {
                "id": "obj_017",
                "name": "thick, meticulous ledger",
                "description": "A thick, leather-bound book, its pages filled with meticulous handwriting and mysterious symbols."
            },
            {
                "id": "obj_018",
                "name": "large, blackened cauldron",
                "description": "A large, blackened pot set on an iron stand, its surface slick with condensation from bubbling contents."
            },
            {
                "id": "obj_019",
                "name": "graceful, rising plumes",
                "description": "Wisps of steam rising gracefully, carrying hints of whatever strange brew lies within the cauldron."
            },
            {
                "id": "obj_020",
                "name": "warm, curling steam",
                "description": "Warm, damp vapor curling softly into the air, lending the room an ethereal quality."
            },
            {
                "id": "obj_021",
                "name": "small, inscribed talismans",
                "description": "Small charms of bone, metal, and wood, inscribed with symbols of protection and power."
            },
            {
                "id": "obj_022",
                "name": "thick, sturdy ceiling beams",
                "description": "Thick, sturdy timbers crisscrossing the ceiling, darkened by age and adorned with hanging trinkets."
            },
            {
                "id": "obj_023",
                "name": "slanted, worn rack",
                "description": "A wooden stand near the entrance, its slanted shelves holding books with cracked spines and worn covers."
            },
            {
                "id": "obj_024",
                "name": "old, faded books",
                "description": "Old tomes bound in faded leather, their pages filled with knowledge both mundane and magical."
            },
            {
                "id": "obj_025",
                "name": "heavy, iron-handled door (marketplace)",
                "description": "A heavy oak portal, its iron handle smooth from countless touches, leading to the bustling marketplace."
            },
            {
                "id": "obj_026",
                "name": "smaller, inconspicuous door (back)",
                "description": "A smaller, less conspicuous entrance partially obscured by the cascading ivy."
            },
            {
                "id": "obj_027",
                "name": "cascading, green ivy",
                "description": "Cascading green tendrils that frame the narrow back door, adding a touch of life to the somber room."
            }
        ]
    }
    let output = document.getElementsByClassName('output')[0];
    let message = document.createElement("p");
    message.innerHTML = `<h3>${room.Title}</h3> ${room.Description}`;
    output.append(message)
    let interactables = document.getElementsByClassName('interact');
    
    for (let i =0; i < interactables.length; i++){

        let element = interactables[i];
        let description = room.Objects.find((obj)=>{
            if(obj.id == element.id){
                return true;
            }
        }).description.split('');
        element.addEventListener('click', function(e){
            document.getElementsByClassName('output')[0].classList+=" faded  ";
            
            if(!e.target.classList.contains('opened')){
                e.target.classList = e.target.classList+" opened";
                e.target.innerHTML = e.target.innerHTML+"<span class='highlight'></span>";
                let highlight = e.target.querySelector('.highlight');
                highlight.innerHTML += " "
                let j = 0;

                let letterCycle = setInterval(() => {
                    if(j >= description.length-1){
                        clearInterval(letterCycle)
                    }
                    console.log(description[j])
                    highlight.innerHTML += description[j]
                    j++
                }, 75);
            }
        })
    }
    
    /* Get the documentElement (<html>) to display the page in fullscreen */
    let fsbutton =  document.getElementById('fsbutton');
    fsbutton.addEventListener("click", function(e){
        document.documentElement.requestFullscreen().catch((err)=>{ console.log(err)})
    })
    fsbutton.classList = fsbutton.classList+"Fullscreen"

    // /* View in fullscreen */
    // function openFullscreen() {
    //   if (elem.requestFullscreen) {
    //     elem.requestFullscreen();
    //   } else if (elem.webkitRequestFullscreen) { /* Safari */
    //     elem.webkitRequestFullscreen();
    //   } else if (elem.msRequestFullscreen) { /* IE11 */
    //     elem.msRequestFullscreen();
    //   }
    // }
    
    // /* Close fullscreen */
    // function closeFullscreen() {
    //   if (document.exitFullscreen) {
    //     document.exitFullscreen();
    //   } else if (document.webkitExitFullscreen) { /* Safari */
    //     document.webkitExitFullscreen();
    //   } else if (document.msExitFullscreen) { /* IE11 */
    //     document.msExitFullscreen();
    //   }
    // }

    // openFullscreen();
    // setTimeout(closeFullscreen(), 3000)
</script>


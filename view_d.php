<!DOCTYPE html>
<html>
<head>

</head>

<body style="background-color: white;
  background-image: linear-gradient(-90deg,purple,pink);
">

<?php
// if the form has been submitted
if(isset($_POST['submit'])) {
  $number = (int) $_POST['number'];
  switch($number) {
    case 1:
          echo "<b>Allergies</b><p><b>Causes</b><span>People with allergies have especially sensitive immune systems that react when they contact allergens.

Common allergens include:

foods (nuts, eggs, milk, soy, shellfish, wheat)
pollen
mold
latex
pet dander
</span></p>
<p><b>Symptoms</b><span> Because there are so many possible causes, the symptoms of allergies vary widely. Airborne allergens, like pollen and pet dander, are likely to cause:

Eye irritation
Runny nose
Stuffy nose
Puffy, watery eyes
Sneezing
Inflamed, itchy nose and throat</span></p>

<p><b>Remedies</b><span>Antihistamines: help relieve or prevent the sneezing, itchy eyes and throat, and postnasal drip that the allergen may cause. They are sold in many forms (i.e., pills, nasal sprays, liquids, etc.).
Decongestants: help reduce congestion in your nasal membranes by narrowing the blood vessels that supply those membranes. They can be purchased in several forms (liquid, pill or nasal spray) and may be used with an antihistamine or alone to treat nasal swelling related to allergies.  Limit use of nasal sprays to fewer than two to three days in a row because prolonged use can cause the nasal membrane swells, resulting in severe nasal obstruction.  </span></p>

<p><b>Prevention</b><span>Avoid the outdoors between 5-10 a.m. and save outside activities for late afternoon or after a heavy rain, when pollen levels are lower.
Keep windows in your living spaces closed to lower exposure to pollen.
To keep cool, use air conditioners and avoid using window and attic fans.
Wear a medical alert bracelet or other means to communicate to others about your allergy in case of a reaction.
Discuss a prescription for epinephrine (e.g., EpiPen) with your healthcare provider, if you have risk of serious allergic reaction.
Review product labels carefully before buying or consuming any item
Know what you are eating or drinking. </span></p>";
        break;
    case 2:
          echo "<b>Cold</b><p><b>Causes</b><span>Both of these illnesses are upper respiratory infections, meaning they involve your nose, throat, and lungs. Viruses cause both colds and flu by increasing inflammation of the membranes in the nose and throat.

Most transmission of these viruses occurs via hand-to-hand contact. </span></p>
<p><b>Symptoms</b><span>Flu symptoms come on suddenly and affect the body all over. Flu symptoms are usually more serious than a cold and include:

fever (100° F),
headache,
more intense pain and fatigue, and
more severe, often dry cough.
When you get the flu, you are also more prone to bronchitis, sinus, and ear infections.

Cold symptoms mostly affect above the neck and include:

a runny or stuffy nose (nasal congestion),
sneezing,
sore throat, and
cough.
</span></p>
<p><b>Remedies</b><span>Salt water nasal sprays (e.g. NaSal or Ocean) can ease nasal congestion and thin mucus. However, excessive use of medicated nose sprays, like Afrin, can cause dependence and may make congestion worse.
Humidifiers and hot showers can help to moisten nasal passages and clear mucus.
Cough:
Dextromethorphan is an effective cough suppressant, but because a cough is a protective reflex, it is not usually a bad thing. Take dextromethorphan if your cough is interfering with sleep or work.
Water vapor from humidifiers and showers can help loosen the mucus causing a cough, as can chicken soup.
Sore Throat:
Phenol in lozenges and sprays is an effective pain reliever for sore throats.
Gargling with warm saltwater (1 tsp. salt in one cup of warm water) every four hours may help ease pain by reducing swollen tonsils.
Drinking tea with lemon (with or without honey).
Fever/Pain:
Acetaminophen, Aspirin, Ibuprofen. If symptoms are severe, you may alternate acetaminophen and ibuprofen every two hours for pain or fever relief.
</span></p>
<p><b>Prevention</b><span>Wash your hands often (which is good advice for keeping healthy in any situation). Keep them away from your nose, eyes, and mouth. Use an instant hand sanitizer when you can’t wash your hands.
Get regular exercise and eat well.
Follow good sleep habits.
Get a flu shot each fall (offered to all students at a lower cost by UHS each fall)  </span></p>";
        break;
    case 3:
          echo "<b>Diarrhea</b><p><b>Causes</b><span> Bacterial infection, caused by contaminated food or water
Viral infection
Parasites, which can enter the body through food or water
Food intolerance, such as the inability to digest lactose, the sugar in milk
Overuse of alcohol or laxatives
Medication, such as some antibiotics or antacids containing magnesium
Menstrual cramps
Stress or a panic attack
</span></p>
<p><b>Symptoms</b><span> watery, loose stools
frequent bowel movements
cramping or pain in the abdomen, nausea, bloating
possibly fever or bloody stools, depending on the cause</span></p>
<p><b>Remedies</b><span>Usually diarrhea will clear up on its own in a day or two, but a prolonged case may cause complications. The most important concern is dehydration. If you have symptoms of dehydration, a fever above 102° F, bloody stools (black and tarry), severe abdomen or rectum pain, or diarrhea lasting more than 3 days you should consult a physician. </span></p>
<p><b>Prevention</b><span>Avoid foods that are milk-based, greasy, high-fiber, or very sweet because these are likely to aggravate diarrhea.
Avoid caffeine and alcohol.
Do not eat solid food if you have signs of dehydration (thirst, light-headed, dark urine). Instead, drink about 2 cups of clear fluids per hour (if vomiting isn’t present), such as sports drinks and broth. Water alone is not enough because your body needs sodium and sugar to replace what it’s losing.
Avoid high sugar drinks, like apple juice, grape juice, and soda, which can pull water into the intestine and make the diarrhea persist. </span></p> ";
        break;
    case 4:
          echo "<b>Headache</b><p><b>Name of the disease</b><span>Headaches </span></p>
<p><b>Causes</b><span>Emotional and physical stress
Fatigue
Irregular sleep habits (sleeping too much or too little)
Skipping meals
Caffeine use or withdrawal
Hormonal factors, such as menstruation
Monosodium glutamate (MSG)
Foods with nitrates, such as hot dogs
Alcohol
Some medicines
Certain foods, including red wine, chocolate, aged cheeses, pickled foods, nuts, and aspartame
Changes in weather, altitude, or time zone </span></p>
<p><b>Symptoms</b><span> Symptoms of a migraine:
<br>
pulsing or throbbing quality
begins with intense pain on one side of the head, which eventually spreads
felt on one or both sides of the head
lasts several hours
severe enough to interfere with routine activities
may be accompanied by nausea or vomiting
sometimes preceded by visual changes, such as an aura of zigzag lines or flashes of light
light and noise can make the headache worse, while sleep tends to relieve symptoms
<br>
Symptoms of a tension-type headache:
<br>
constant, dull ache
felt on both sides of the head
a feeling of squeezing or pressure
does not usually interfere with routine activities
lasts from 30 minutes to a few days
</span></p>
<p><b>Remedies</b><span>Ice pack held over the eyes or forehead
Heating pad set on low or hot shower to relax tense neck and shoulder muscles
Sleep, or at least resting in a dark room
Taking breaks from stressful situations
Regular exercise to increase endorphin levels and relax muscles. Even if you already have a headache, exercising may relieve the pain. However, intense exercise may bring on a headache.
Occasional use of over-the-counter medicines such as acetaminophen, ibuprofen, or aspirin can relieve both migraine and tension headaches. *
Prescription drugs for severe headaches
</span></p>
<p><b>Prevention</b><span> Be aware of early symptoms so you can try to stop the headache as soon as it begins.
Dont smoke, and if you do, quit.
Dont skip meals.
Cut down on caffeine and alcohol (reduce caffeine intake gradually because withdrawal may cause headaches).
Stop all over-the-counter medicines and herbal remedies.
Maintain a regular eating and sleeping schedule.
Exercise regularly.
Incorporate relaxation activities into your daily routine, such as meditation, yoga, stretching exercises, and massage
Improve your posture, possibly by adjusting your workstation.
</span></p>
";

        break;
    case 5:
          echo "<b>Mononucleosis</b><p><b>Causes</b><span>Mononucleosis is an illness caused by the Epstein-Barr virus (EBV), which is spread through saliva. </span></p>
<p><b>Symptoms</b><span> The most well known symptom of “mono“ is extreme fatigue, forcing the infected person to nap frequently. If you experience such extreme fatigue accompanied by other symptoms, such as swollen lymph glands and spleen, sore throat, fever, loss of appetite, and muscle aches, you may want to get tested for mono. The basis for testing whether you have mono is the presence of antibodies produced by white blood cells. Many people infected with mono don’t get sick, or have such mild symptoms they don’t know they have it. EBV is usually in the body 30-50 days before an infected person develops symptoms. Surprisingly, 80-95% of adults in the US have been infected by the time they’re 40, but only about 20% know they’ve had mono.</span></p>
<p><b>Remedies</b><span>Mono is a virus, so antibiotics won’t help. Make sure you get plenty of rest, eat healthy foods, avoid alcohol (because your liver may be inflamed and drinking weakens immune responses), drink plenty of fluids, take aspirin or an aspirin substitute to reduce pain and fever, gargle salt water to relieve sore throat, and avoid strenuous activity. Because your spleen may be swollen, it is important not to engage in contact sports which could rupture your spleen. Returning to normal activity too quickly increases your chances of relapse.

</span></p>
<p><b>Prevention</b><span>Avoiding someone with mono can be hard because infected individuals often do not show symptoms. Because the incubation period is so long, a person can be contagious 1-2 months before showing any symptoms, and some people don’t show symptoms at all. Even after signs of mono have disappeared, a person may still be producing the virus. A strong immune system, maintained by healthy diet, exercise, and adequate sleep, can help you from getting ill. Fortunately, mono is not very contagious, and is usually only passed through intimate contact, such as kissing. [top] </span></p>";
        break;
   
    default:
        echo 'wrong number';
  }
}
?>
 
</body>
</html>





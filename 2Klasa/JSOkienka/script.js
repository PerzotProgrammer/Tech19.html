function Alert()
{
    alert("KAZAKSTAN UGRAŻAJU NAM BAMBARDIEROWKE!");
} 

function Confirm()
{
    let check = confirm("Czy jesteś pewien?");
    if (check) alert(":)");
    else alert(":(");
}

function Prompt()
{
    let check = prompt("Cześć co tam!","Joł, hej, heloł");
    if (check == null) alert("Czemu!!!");
    else if (check == "Joł, hej, heloł") alert("Ale jesteś leniem :O");
    else alert("To fajnie!");
}

function DodajOdejmij()
{
    let pierwsza = 2;
    let druga = "1";
    let check = confirm("Dodaj lub odejmij");
    if (check) alert(pierwsza + druga);
    else alert(pierwsza - druga);
}

function Mnozenie()
{
    let pierwsza = 1;
    let druga = 1;
    let ile = 10;
    for ( let i = 0 ; i < ile; i ++) 
    {
    alert("Iloczyn liczb " + pierwsza + " i " + druga + " wynosi " + (pierwsza * druga));
    pierwsza ++;
    druga ++;
    }
}

function Banan()
{
    alert(('b' + 'a' + + 'a' + 'a').toLowerCase());
}
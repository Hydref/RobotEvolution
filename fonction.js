
var nbLvl = 0;
	
function calculLvl(x)
	{
		var xp = x;
		while (xp > 1000*Math.pow(1.3,nbLvl))
		{
			xp = xp - 1000 * (Math.pow(1.3,nbLvl));
			nbLvl = nbLvl+1;
		}
		
		var xpLvl = [xp, nbLvl];
		
		return xpLvl;
	}
	

 
function Grade(y)	
	{
	
		var tonGrade = 0;
		
		for (var i = 1; (i < 10); i++) {
		
			if (y >= i*10)
			{
				tonGrade++;
			}
		}
		
		return tonGrade ;
	}




print("起動中")
playername = input("名前を入力してください.")
class Test:
    def __init__(self,attack,name,block,mp,hp):
        self.attack = attack;
        self.name = name;
        self.block = block;
        self.mp = mp;
        self.hp = hp;
    def _attack_(attack,monster_hp):
        
        if attack < monster_hp:
            monster_hp -= attack
            print(attack,"のダメージを与えた!")
        
    def _defens_(damege):
        print("{damege}のダメージを受けた！")
class monster:
    def __init__(self,hp,attack,name):
        self.attack = attack;
        self.name = name;
        self.hp = hp;
player = Test(3,{playername},2,10)
gobrin = monster(5,5,"gobrin")
gigarosh = monster(10,10,"gigarosh")

while player.hp < 1:
    pass
if [ ! -d "/home/wwwsrc/project1240" ]; then
	cd /home/wwwsrc
	git clone https://github.com/Ltre/project1240.git
else
	cd /home/wwwsrc/project1240
	git pull
fi

mv /home/wwwroot/project1.yooo.moe /home/wwwroot/project1.yooo.moe.trash
cp /home/wwwsrc/project1240/frontend -r /home/wwwroot/project1.yooo.moe
rm -f -r /home/wwwroot/project1.yooo.moe.trash
cd /home/wwwroot/project1.yooo.moe

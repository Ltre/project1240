if [ ! -d "/home/wwwsrc" ]; then
    mkdir /home/wwwsrc
fi

if [ ! -d "/home/wwwsrc/project1240" ]; then
	cd /home/wwwsrc
	git clone https://github.com/Ltre/project1240.git
else
	cd /home/wwwsrc/project1240
	git pull
fi

mv /home/wwwroot/www.fengzhang.com /home/wwwroot/www.fengzhang.com.trash
cp /home/wwwsrc/project1240/frontend -r /home/wwwroot/www.fengzhang.com
rm -f -r /home/wwwroot/www.fengzhang.com.trash
cd /home/wwwroot/www.fengzhang.com

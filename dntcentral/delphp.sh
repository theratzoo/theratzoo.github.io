for i in $(find . -name '*.html'); do
	sed -e "s/style\.css/dntcentral\/style.css/g" -i $i
done

export REVERB_APP_ID=449824
export REVERB_APP_KEY=d8jlofhwjgdfcfok6pb4
export REVERB_APP_SECRET=p4rfhdglzd5que1kbcgs

curl -i -u "${REVERB_APP_KEY}:${REVERB_APP_SECRET}" \
    -H "Content-Type: application/json" \
    -X POST "https://laravel.vitodeploy.com/ws/app/${REVERB_APP_ID}/events" \
    -d '{"name":"test","channels":["private-test"],"data":"{\"ok\":true}"}'

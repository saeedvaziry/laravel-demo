<div x-data="{
    reactions: [],
    addReaction(emoji) {
        const id = Date.now() + Math.random();
        this.reactions.push({ id, emoji });
         setTimeout(() => {
            this.reactions = this.reactions.filter(r => r.id !== id);
        }, 2000);
    },
    init() {
        $wire.on('newEmoji', (event) => {
            const emoji = event[0].emoji;
            this.addReaction(emoji);
        });
    }
}">
    <!-- Floating emojis -->
    <div class="reactions absolute bottom-0 left-1/2 -translate-x-1/2 pointer-events-none">
        <template x-for="reaction in reactions" :key="reaction.id">
            <span
                x-text="reaction.emoji"
                class="absolute text-3xl animate-float"
                :style="`left: ${Math.random() * 300 - 130}px;`"
            ></span>
        </template>
    </div>

    <div class="flex items-center justify-center gap-2">
        <button wire:click="send('😀')" class="py-2 px-3 bg-gray-200 rounded bg-transparent hover:bg-[#200C01] rounded-lg cursor-pointer text-3xl">😀</button>
        <button wire:click="send('😍')" class="py-2 px-3 bg-gray-200 rounded bg-transparent hover:bg-[#200C01] rounded-lg cursor-pointer text-3xl">😍</button>
        <button wire:click="send('👍')" class="py-2 px-3 bg-gray-200 rounded bg-transparent hover:bg-[#200C01] rounded-lg cursor-pointer text-3xl">👍</button>
        <button wire:click="send('🎉')" class="py-2 px-3 bg-gray-200 rounded bg-transparent hover:bg-[#200C01] rounded-lg cursor-pointer text-3xl">🎉</button>
    </div>
</div>

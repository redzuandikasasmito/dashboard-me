@push('scripts')
        <script>
            const proposalForm = document.getElementById('proposalForm');
            const proposalName = document.getElementById('proposalName');
            const proposalDescription = document.getElementById('proposalDescription');
            const proposalStatus = document.getElementById('proposalStatus');
            const proposalTableBody = document.getElementById('proposalTableBody');
            const templateModal = document.getElementById('templateModal');

            function openModal(modalId) {
                document.getElementById(modalId).showModal();
            }

            function closeModal(modalId) {
                // templateModal.close();
                document.getElementById(modalId).closeModal();
            }
            function saveProposal(event) {
                event.preventDefault();
                const id = proposalId.value;
                const name = proposalName.value;
                const description = proposalDescription.value;
                const status = proposalStatus.value;

                if (id) {
                    // Update Proposal
                } else {
                    // Create Proposal
                }
            }

            function editProposal() {
                openModal('templateModal');
            }

            function deleteProposal() {
                // Delete Proposal
            }
        </script>
        
    @endpush